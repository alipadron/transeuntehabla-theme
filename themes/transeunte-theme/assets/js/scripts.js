// 3rd party packages from NPM
import OrgiaCultural from "./modules/OrgiaCultural";
import MobileMenu from "./modules/MobileMenu";
import Modal from "./modules/Modal";
require('lightgallery.js');
lightGallery(document.getElementById('gallery'), {selector: '.item'});
var orgiaCultural = new OrgiaCultural();
var mobileMenu = new MobileMenu();
var modal = new Modal();

