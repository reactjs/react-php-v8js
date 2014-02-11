<?php
/**!
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the root directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 */

/**
 * Example of using the ReactJS class
 */
include '../ReactJS.php';

$rjs = new ReactJS(
  file_get_contents('../../react/build/react.js'), // location of React's code
  file_get_contents('table.js')); // app code

// data to be passed to the component
$data = 
  array('data' => array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
  ));

// set the component and its data
// after this you can call getMarkup()/getJS()
// Then you can set another component to render
// and do that as many times as the components you need
// all the while reusing the $rjs instance
$rjs->setComponent('Table', $data);
?>
<!doctype html>
<html>
  <head>
    <title>React page</title>
    <!-- css and stuff -->
  </head>
  <body>
    
    <!-- render server content here -->
    <div id="page"><?php echo $rjs->getMarkup(); ?></div> 
    
    <!-- load react and app code -->
    <script src="react/build/react.min.js"></script>
    <script src="react/build/table.js"></script>
    
    <script>
    // client init/render
    // this is a straight echo of the JS because the JS resources
    // were loaded synchronously
    // You may want to load JS async and wrap the return of getJS()
    // in a function you can call later
    <?php echo $rjs->getJS('#page', "GLOB"); ?>
    </script>
  </body>
</html>

