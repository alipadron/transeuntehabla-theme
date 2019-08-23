var $ = require("jquery");

export default class OrgiaCultural {
  constructor() {
    this.arrowIcons = $(".orgia-cultural-item__content__icon");

    this.events();
  }

  events() {
    const that = this;
    this.arrowIcons.each(function (index, arrowIcon) {
      $(arrowIcon).click(that.handleIconClick);
    });
  }

  handleIconClick(event) {
    $(event.target).toggleClass('fa-arrow-up fa-arrow-down')
      .next()
      .slideToggle();
  }
}
