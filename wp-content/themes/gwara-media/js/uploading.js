/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports) {

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && Symbol.iterator in Object(iter)) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

var $publicationForm = $('.publication-data');

if ($publicationForm.length) {
  var getFiles = function getFiles() {
    return [].concat(_toConsumableArray(_uploader.getRejectedFiles()), _toConsumableArray(_uploader.getAcceptedFiles()));
  };

  var dropzoneSelector = '#_dropzone';
  var $dropzoneNode = $(dropzoneSelector);
  var action = $publicationForm.attr("action");

  var _$dropzoneNode$data = $dropzoneNode.data(),
      extMsg = _$dropzoneNode$data.extMsg,
      maxSizeMsg = _$dropzoneNode$data.maxSizeMsg;

  var setRemoveHtml = function setRemoveHtml(node) {
    return node.innerText = '???';
  };

  var files = [];

  var _uploader = new Dropzone(dropzoneSelector, {
    url: action,
    maxFilesize: 2,
    autoProcessQueue: false,
    addRemoveLinks: true,
    dictCancelUpload: "???",
    dictFileTooBig: maxSizeMsg,
    dictInvalidFileType: extMsg,
    dictResponseError: ' ',
    headers: 'Access-Control-Allow-Origin: *"',
    acceptedFiles: '.jpg, .jpeg, .png, .doc, .odt, .pdf, .rtf, .tex, .txt, .wpd',
    previewsContainer: '.previews-list--desktop',
    preventDuplicates: true,
    dictDuplicateFile: "Duplicate Files Cannot Be Uploaded"
  }).on('complete', function (file) {
    setRemoveHtml(file._removeLink);
  }).on('addedfile', function (file) {
    setRemoveHtml(file._removeLink);
    var isExist = files.find(function (f) {
      return f.name === file.name;
    });

    if (isExist) {
      _uploader.removeFile(file);
    } else {
      files = getFiles();
    }

    if (!file.type.startsWith('image/')) {
      var ext = file.name.split('.').pop();
      $(file.previewTemplate).find('.dz-image').html("\n                    <p class=\"dz-file-ext\">.".concat(ext, "</p>\n                "));
    }
  }).on('removedfile', function (file) {
    files = getFiles();
  }).on('error', function (data, msg, xhr) {
    console.log(data, 'err');

    if (data.upload) {
      setTimeout(function () {
        _uploader.removeFile(data);
      }, 2000);
    }

    if (xhr) {
      if (xhr.status === 404) {
        throw new Error('404');
      }
    }
  });

  $publicationForm.submit(function (evt) {
    evt.preventDefault();
    var $this = $(this);
    var formData = {};
    var inputs = $this.find('input');
    var textArea = $this.find('textarea');
    inputs.each(function () {
      if ($(this).val()) {
        formData[$(this).attr('name')] = $(this).val();
      }
    });

    if (textArea.val()) {
      formData[$(textArea).attr('name')] = textArea.val();
    }

    var files = _uploader.getAcceptedFiles();

    if (files.length) {
      var keys = ['width', 'height', 'dataURL', 'size', 'type', 'name'];
      formData['files'] = Array.from(files).map(function (f) {
        var _data = {};

        var _loop = function _loop(key) {
          if (keys.find(function (_k) {
            return key === _k;
          })) {
            _data[key] = f[key];
          }
        };

        for (var key in f) {
          _loop(key);
        }

        return _data;
      });
    }

    if (Object.keys(formData).length) {
      $.ajax({
        type: "POST",
        url: '/wp-admin/admin-ajax.php',
        dataType: "json",
        data: _objectSpread({
          action: action
        }, formData),
        success: function success(data) {
          if (data.status) {
            inputs.val('');
            textArea.val('');
            Array.from(files).forEach(function (f) {
              return _uploader.removeFile(f);
            });
          }
        },
        error: function error(jqXHR, exception) {
          console.error(jqXHR);
          console.error(exception);
        }
      });
    }
  });
}

/***/ })
/******/ ]);
//# sourceMappingURL=uploading.js.map