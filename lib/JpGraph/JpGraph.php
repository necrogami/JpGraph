<?php
namespace JpGraph ;

/** Ztec's \JpGraph\JpGraph class with static helpers for initializing JpGraph
 * from caller scripts in a more object-oriented manner (essentially avoiding script
 * inclusions like “require lib/jpgraph/src/jpgraph.php”).
 *
 * @link https://github.com/tstrijdhorst/JpGraph/commit/9e503f4
 *   made this « extends Symfony\Component\HttpKernel\Bundle\Bundle »,
 *   but I'm undoing this so as not to introduce a dependency over anything
 *   (FabiC.2015-08-07 while merging all those forks out there).
 *
 * @since 2013-03-31 https://github.com/ztec/JpGraph/tree/73f9d38
 * @author https://github.com/ztec/JpGraph
 */
class JpGraph {

    static  $loaded = false ;
    static  $modules = array();

    static function load(){
        if(self::$loaded !== true){
            include_once __DIR__.'/src/jpgraph.php';
            self::$loaded = true ;
        }
    }
    static function module($moduleName){
        self::load();
        if(!in_array($moduleName,self::$modules)){
            $path = __DIR__.'/src/jpgraph_'.$moduleName.'.php' ;
            if(file_exists($path)){
                include_once $path ;
                self::$modules[] = $moduleName;
            }else{
                throw new ModuleNotFoundException('The JpGraphs\'s module "'.$moduleName.'" does not exist');
            }
        }
    }
}

