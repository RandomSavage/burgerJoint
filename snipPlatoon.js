// *******Linked list typing practice********
// ******Add Comments to enhance learning****
// ******--------------------------------****


// The this keyword in functions behaves differently in strict mode.
// The this keyword refers to the object that called the function.
// If the object is not specified, functions in strict mode will return
// undefined and functions in normal mode will return the global object (window):
//
// Strict mode makes it easier to write "secure" JavaScript.
// Strict mode changes previously accepted "bad syntax" into real errors.
// As an example, in normal JavaScript, mistyping a variable name creates a new
//  global variable. In strict mode, this will throw an error, making it impossible
// to accidentally create a global variable.In normal JavaScript, a developer will
// not receive any error feedback assigning values to non-writable properties.
// In strict mode, any assignment to a non-writable property, a getter-only
// property, a non-existing property, a non-existing variable, or a non-existing
// object, will throw an error.

'use strict'

class LinkedList {
  constructor() {
    this.head = null;
    this._length = 0;
  }

  add(value, position) {
    let node = {
      _value: value,
      _next: null
    };

    if(position === 0) {
      node._next = this._head;
      this._head = node;
    }
  }
}
