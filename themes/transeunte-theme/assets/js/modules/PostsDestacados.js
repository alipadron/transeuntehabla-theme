var $ = require("jquery");

export default class PostsDestacados {
  constructor() {
    this.postsDestacados = $(".featured-posts__post");

    this.events();
  }

  events() {
    const that = this;
    this.postsDestacados.each(function registerPostHover() {
      $(this).hover(that.handlePostHover);
    });
  }

  handlePostHover(event) {
    $(event.target).closest('.featured-posts__post').find('.featured-posts__post__text').toggleClass('featured-posts__post__text--is-visible');
  }
}
