var $ = require("jquery");

export default class OrgiaCultural {
  constructor() {
    this.infoIcons = $(".orgia-cultural-item__info-icon");

    this.events();
  }

  events() {
    this.infoIcons.each(function(index, element) {
      $(element).click(function(event) {
        $(event.target)
          .next()
          .find(".orgia-cultural-item__content__container")
          .slideToggle();
      });
    });
  }
}
