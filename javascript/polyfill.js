//Polyfill is a piece of code that is used to fill the wholes in web browser in older version that don't have moder browser fatures.
//Polyfill example
if (!String.prototype.startsWith) {
  String.prototype.startsWith = function (searchString, position) {
    position = position || 0;
    return this.substr(position, searchString.length) === searchString;
  };
}