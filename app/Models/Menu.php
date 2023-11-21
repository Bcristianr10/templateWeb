<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Menu extends Model
{
    use HasFactory;
    
    protected $table ='menus';
    protected $primaryKey = 'id';
    protected $fillable = ['name','slug','route','icon','parent','order','enabled'];

    public function getChildren($data, $line)
    {
        $children = [];
        foreach ($data as $line1) {
            if ($line['id'] == $line1['parent']) {
                $subMenu = $this->getChildren($data, $line1);
                $fields = $this->getFields($line1);                
                if($subMenu){
                     $children = array_merge($children, [ array_merge($fields, ['submenu' => $subMenu ]) ]);
                }else{

                     $children = array_merge($children, [ $fields ]);
                }                
            }
        }
        return $children;
    }

    public function optionsMenu()
    {
        return $this->where('enabled', 1)                        
            ->orderby('parent')
            ->orderby('order')
            ->orderby('name')
            ->get();
    }

    public static function menus():Collection
    {
        $menus = new Menu();
        $data = $menus->optionsMenu()->where('admin',0)->toArray();
        $menuAll = [];
        foreach ($data as $line) {   
            $subMenu = $menus->getChildren($data, $line);
            $fields = $menus->getFields($line);
            $item = [$fields];
            if($subMenu){
                $item = [ array_merge($fields, ['submenu' => $subMenu ]) ];
            }
            if($line['parent'] == 0){
                $menuAll = array_merge($menuAll, $item);
            }
        }                
        return collect($menus->menuAll = $menuAll);
    }
    public static function menusAdmin():Collection
    {
        $menus = new Menu();
        $data = $menus->optionsMenu()->where('admin',1)->toArray();
        $menuAll = [];
        foreach ($data as $line) {   
            $subMenu = $menus->getChildren($data, $line);
            $fields = $menus->getFields($line);
            $item = [$fields];
            if($subMenu){
                $item = [ array_merge($fields, ['submenu' => $subMenu ]) ];
            }
            if($line['parent'] == 0){
                $menuAll = array_merge($menuAll, $item);
            }
        }                
        return collect($menus->menuAll = $menuAll);
    }
    public function getFields($data):array {        
        return[
            'text'=>$data['name'],
            'route'=>$data['route'],
            'label_color'=>'bg-white',
            'icon'=>$data['icon'],
        ];
    }

    public function proccess (){
        
    }


}
