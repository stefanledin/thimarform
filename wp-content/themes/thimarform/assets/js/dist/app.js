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
/******/ 	return __webpack_require__(__webpack_require__.s = "./assets/js/src/app.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/src/app.js":
/*!******************************!*\
  !*** ./assets/js/src/app.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/**\n *\n * Mobilmeny\n *\n */\n\nconst toggleMobileMenyVisibility = (event) => {\n    console.log(event);\n    document.body.classList.toggle('mobile-menu--open');\n}\nconst openMobileMenubutton = document.querySelector('svg.menu-icon');\nconst closeMobileMenubutton = document.querySelector('.mobile-menu__close');\nopenMobileMenubutton.addEventListener('click', toggleMobileMenyVisibility);\nopenMobileMenubutton.addEventListener('touch', toggleMobileMenyVisibility);\ncloseMobileMenubutton.addEventListener('click', toggleMobileMenyVisibility);\ncloseMobileMenubutton.addEventListener('touch', toggleMobileMenyVisibility);\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9hc3NldHMvanMvc3JjL2FwcC5qcy5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9qcy9zcmMvYXBwLmpzP2E2YzgiXSwic291cmNlc0NvbnRlbnQiOlsiLyoqXG4gKlxuICogTW9iaWxtZW55XG4gKlxuICovXG5cbmNvbnN0IHRvZ2dsZU1vYmlsZU1lbnlWaXNpYmlsaXR5ID0gKGV2ZW50KSA9PiB7XG4gICAgY29uc29sZS5sb2coZXZlbnQpO1xuICAgIGRvY3VtZW50LmJvZHkuY2xhc3NMaXN0LnRvZ2dsZSgnbW9iaWxlLW1lbnUtLW9wZW4nKTtcbn1cbmNvbnN0IG9wZW5Nb2JpbGVNZW51YnV0dG9uID0gZG9jdW1lbnQucXVlcnlTZWxlY3Rvcignc3ZnLm1lbnUtaWNvbicpO1xuY29uc3QgY2xvc2VNb2JpbGVNZW51YnV0dG9uID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLm1vYmlsZS1tZW51X19jbG9zZScpO1xub3Blbk1vYmlsZU1lbnVidXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCB0b2dnbGVNb2JpbGVNZW55VmlzaWJpbGl0eSk7XG5vcGVuTW9iaWxlTWVudWJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCd0b3VjaCcsIHRvZ2dsZU1vYmlsZU1lbnlWaXNpYmlsaXR5KTtcbmNsb3NlTW9iaWxlTWVudWJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIHRvZ2dsZU1vYmlsZU1lbnlWaXNpYmlsaXR5KTtcbmNsb3NlTW9iaWxlTWVudWJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCd0b3VjaCcsIHRvZ2dsZU1vYmlsZU1lbnlWaXNpYmlsaXR5KTtcbiJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7Iiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./assets/js/src/app.js\n");

/***/ })

/******/ });