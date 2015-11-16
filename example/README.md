# Example

This example uses npm to build a custom library that will be inserted to be used for rendering React. You may want to do something similar in your own project.

## Set up

1. Ensure node and npm are installed
2. `npm install`
3. `npm run make`

This will create several files in the `build/` directory. `bundle-react.js` is what will be passed into the `ReactJS` constructor as `libsrc`. It exposes 3 globals: `React`, `ReactDOM`, and `ReactDOMServer`.
