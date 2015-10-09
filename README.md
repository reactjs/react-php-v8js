React-PHP-V8Js
===========

React-PHP-V8Js is an experimental library that uses the power of Facebook's
[React](http://facebook.github.io/react/) library to render UI components
on the server-side with PHP as well as on the client.

Prerequisites
===========
* Server running PHP 5.3.3+
* [V8Js PHP extension](http://php.net/v8js)

For a walkthrough how to setup V8Js PHP extension, use the links below:

- [On Linux](https://github.com/preillyme/v8js/blob/master/README.Linux.md)
- [On MacOS](https://github.com/preillyme/v8js/blob/master/README.MacOS.md)
- [On Windows](https://github.com/preillyme/v8js/blob/master/README.Win32.md)

Usage
===========
```php
// the library
$react_source = file_get_contents('/path/to/build/react.js');
// all custom code concatenated
$app_source = file_get_contents('/path/to/custom/components.js');

$rjs = new ReactJS($react_source, $app_source);
$rjs->setComponent('MyComponent', array(
  'any'   =>  1,
  'props' =>  2
  )
);

/// ...

// print rendered markup
echo '<div id="here">' . $rjs->getMarkup() . '</div>';

/// ...

// load JavaScript somehow - concatenated, from CDN, etc
// including react.js and custom/components.js

// init client
echo '<script>' . $rjs->getJS("#here") . '</script>'; 

/// ...

// repeat setComponent(), getMarkup(), getJS() as necessary
// to render more components
```

License
=======
BSD License for React-PHP-V8Js

Copyright (c) 2014, Facebook, Inc. All rights reserved.

Redistribution and use in source and binary forms, with or without modification,
are permitted provided that the following conditions are met:

 * Redistributions of source code must retain the above copyright notice, this
   list of conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice,
   this list of conditions and the following disclaimer in the documentation
   and/or other materials provided with the distribution.
 * Neither the name Facebook nor the names of its contributors may be used to
   endorse or promote products derived from this software without specific
   prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR
ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

