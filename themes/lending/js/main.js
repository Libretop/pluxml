'use strict';

function getElement($object, $selector) {
  return Array.prototype.slice.call($object.querySelectorAll($selector), 0);
}

function removeClass(obj, cls) {
  var classes = obj.className.split(' ');
  for (var i = 0; i < classes.length; i++) {
    if (classes[i] == cls) {
      classes.splice(i, 1);
      i--;
    }
  }
  obj.className = classes.join(' ');
}

//IE checking

function hasBug() {
  var outer = document.createElement('div');
  var inner = document.createElement('div');
  outer.setAttribute('style', 'display:-ms-flexbox; display:flex; min-height:100vh;');
  outer.appendChild(inner);
  (document.body || document.documentElement).appendChild(outer);
  var bug = !inner.offsetHeight;
  outer.parentNode.removeChild(outer);
  return bug;
}

if (hasBug()) {
  fixtiles();
  window.addEventListener('resize', function () {
    fixtiles();
  });
}

//Prepary: remove children .tile elements and set heights - it's needs because IE it's not normally set offsetHeight for .tile elements

function removeTiles($currentTiles) {
  var $height = 0;
  var $padding = parseInt(window.getComputedStyle($currentTiles[0].parentNode.parentNode.querySelector('*'), null).getPropertyValue('padding-top')) * 2;
  $currentTiles.forEach(function ($child) {
    removeClass($child, 'tile');
    $child.style.minHeight = $child.offsetHeight + 'px';
    var $offset = parseInt(window.getComputedStyle($child, null).getPropertyValue('margin-bottom'));
    $height = $height + $child.offsetHeight + $offset;
  });
  return $height + $padding;
}

//Use strict heights for columns and child tiles

function fixcolumns($vertical) {
  var $verticalHeight = [];
  $verticalHeight.length = 0;
  $vertical.forEach(function ($verticalChild) {
    $verticalHeight[$verticalHeight.length] = removeTiles(getElement($verticalChild, '.tile'));
  });
  $vertical.forEach(function ($verticalChild) {
    var $maxHeight = Math.max.apply(null, $verticalHeight);
    $verticalChild.style.height = $maxHeight + 'px';
    var $alone = Array.prototype.slice.call($verticalChild.querySelectorAll('.is-child'));
    var $allHeight = 0;
    $alone.forEach(function ($oneChild) {
      $allHeight = $allHeight + +$oneChild.offsetHeight;
    });
    var $addons = ($verticalChild.offsetHeight - $allHeight) / $alone.length;
    $alone.forEach(function ($oneChild) {
      $oneChild.style.height = $oneChild.offsetHeight + +$addons + 'px';
    });
  });
}

//Main function

function fixtiles() {
  var $tiles = getElement(document, '.is-ancestor');
  $tiles.forEach(function ($ancestor) {
    var $vertical = getElement($ancestor, '.is-vertical');
    if ($vertical.length > 0) {
      fixcolumns($vertical);
    } else {
      fixcolumns(getElement($ancestor, '.is-parent'));
    }
  });
}

function getAll(selector) {
  return Array.prototype.slice.call(document.querySelectorAll(selector), 0);
}

var rootEl = document.documentElement;
var $modals = getAll('.modal');
var $delete = getAll('.delete');
var $modalButtons = getAll('.rules, .news');
var $photos = getAll('.photo');
var $modalCloses = getAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button');
var $burger = getAll('.navbar-burger');
var $headerbackground = getAll('.is-background');

if ($modalButtons.length > 0) {
  $modalButtons.forEach(function ($el) {
    $el.addEventListener('click', function () {
      var target = $el.dataset.target;
      closeBG();
      openModal(target);
    });
  });
}

if ($photos.length > 0) {
  $photos.forEach(function ($el) {
    $el.addEventListener('click', function () {
      var target = $el.dataset.target;
      var photo = $el.dataset.content;
      closeBG();
      openPhoto(target, photo);
    });
  });
}

if ($delete.length > 0) {
  $delete.forEach(function ($el) {
    $el.addEventListener('click', function () {
      $el.parentNode.classList.add('is-hidden');
    });
  });
}

if ($headerbackground.length > 0) {
  $headerbackground.forEach(function (headerbackgroundImage) {
    var bgImage = headerbackgroundImage.dataset.image;
    headerbackgroundImage.style.backgroundImage = 'url(' + bgImage + ')';
  });
}

if ($modalCloses.length > 0) {
  $modalCloses.forEach(function ($el) {
    $el.addEventListener('click', function () {
      closeModals();
    });
  });
}

document.addEventListener('keydown', function (event) {
  var e = event || window.event;
  if (e.keyCode === 27) {
    closeModals();
  }
});

function openModal(target) {
  var $target = document.getElementById(target);
  $target.classList.add('is-active');
}

function openPhoto(target, photo) {
  var $target = document.getElementById(target);
  var $content = $target.querySelector('.content');
  $target.classList.add('is-active');
  $content.innerHTML = '<img src="' + photo + '" alt=""/>';
}

function closeBG() {
  rootEl.classList.add('is-clipped');
}

function closeModals() {
  rootEl.classList.remove('is-clipped');
  $modals.forEach(function ($el) {
    $el.classList.remove('is-active');
  });
}

function closeMenus(target) {
  var $target = document.getElementById(target);
  $target.classList.remove('is-active');
}

$burger.forEach(function ($el) {
  $el.addEventListener('click', function () {
    $el.classList.toggle('is-active');
    var target = $el.dataset.target;
    if ($el.classList.contains('is-active')) {
      openModal(target);
    } else {
      closeMenus(target);
    }
  });
});

var $topnav = document.getElementById('is-topped');
window.onscroll = function () {
  var scrolled = window.pageYOffset || document.documentElement.scrollTop;
  if (scrolled > 50) {
    $topnav.classList.remove('is-hidden');
    $topnav.classList.add('is-active');
  } else {
    $topnav.classList.add('is-hidden');
  }
};