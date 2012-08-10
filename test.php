<?php 
print "<pre><code>\n";
$ar7 = array();
for ($i = 0; $i < 10; $i++) {
  $ar7["Module $i"] = array (
      "name" => "Module $i",
      "package" => "Package " . ($i % 4), // zbytek po dělení
  );
}

foreach ($ar7 as $module) {
  print "$module[name] in $module[package]\n";
}
/* Vypise:
Module 0 in Package 0
Module 1 in Package 1
Module 2 in Package 2
Module 3 in Package 3
Module 4 in Package 0
Module 5 in Package 1
Module 6 in Package 2
Module 7 in Package 3
Module 8 in Package 0
Module 9 in Package 1
 */
/*
$packages = array(
    "Package 0" => array( "Module 0", "Module 4", "Module 8"),
    "Package 1" => array( "Module 1", "Module 5", "Module 9",),
    "Package 2" => array( "Module 2", "Module 6"),
    "Package 3" => array( "Module 3", "Module 7")    
    );
 */

foreach ($ar7 as $package_module_names) {       
           $packages[$package_module_names['package']] [] = $package_module_names['name'];          
}

foreach ($packages as $package_name => $package_module_names) {
  print "In $package_name:\n";
  foreach ($package_module_names as $module_name) {
    print " $module_name\n";
  }
}
/*
 Vypise
In Package 0:
 Module 0
 Module 4
 Module 8
In Package 1:
 Module 1
 Module 5
 Module 9
In Package 2:
 Module 2
 Module 6
In Package 3:
 Module 3
 Module 7
 */
?>