/**!
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the root directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 */
var Table = React.createClass({
  render: function () {
    return (
      React.DOM.table(null, React.DOM.tbody(null,
        this.props.data.map(function (row) {
          return (
            React.DOM.tr(null, 
              row.map(function (cell) {
                return React.DOM.td(null, cell);
              })));
        }))));
  }});