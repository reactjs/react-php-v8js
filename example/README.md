# Example

This example uses npm to build a custom library that will be inserted to be used for rendering React. You may want to do something similar in your own project.

## Set up

1. Ensure node and npm are installed
2. `npm install`
3. `npm run make`

This will create several files in the `build/` directory. `bundle-react.js` is what will be passed into the `ReactJS` constructor as `libsrc`. It exposes 3 globals: `React`, `ReactDOM`, and `ReactDOMServer`.

## Alternative Approach

This example works by building a single bundle for React exposing 3 globals. Another approach would be to concatenate the existing 3 browser bundles that React ships with. Each of these exposes the necessary globals. Here's how you might change the existing `example.php` to make this work.

```diff
@@ -14,9 +14,11 @@
 include '../ReactJS.php';

 $rjs = new ReactJS(
   // location of React's code
-  file_get_contents('build/react-bundle.js'),
+  file_get_contents('path/to/react/react.js') .
+    file_get_contents('path/to/react/react-dom.js') .
+    file_get_contents('path/to/react/react-dom-server.js'),
   // app code
   file_get_contents('build/table.js')
 );

@@ -46,9 +48,10 @@ $rjs->setComponent('Table', $data);
     <!-- render server content here -->
     <div id="page"><?php echo $rjs->getMarkup(); ?></div>

     <!-- load react and app code -->
-    <script src="react/build/react.min.js"></script>
+    <script src="path/to/react/react.js"></script>
+    <script src="path/to/react/react-dom.js"></script>
     <script src="build/table.js"></script>

     <script>
     // client init/render

```
