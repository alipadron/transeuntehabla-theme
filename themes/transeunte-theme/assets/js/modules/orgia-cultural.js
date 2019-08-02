var $ = require("jquery");

export default class OrgiaCultural {
  constructor() {
    this.icons = $(".orgia-cultural-icon");

    this.events();
  }

  events() {
    this.icons.each(function(icon) {
      $(icon).click(function() {
        console.log('icon clicked');
      });
    });
  }
}
