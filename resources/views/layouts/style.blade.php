<style type="text/css">
	.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }

        .rounded-lg-3 { border-radius: .3rem; }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

      /*
 * Globals
 */


	/* Custom default button */
	.btn-light,
	.btn-light:hover,
	.btn-light:focus {
	  color: #333;
	  text-shadow: none; /* Prevent inheritance from `body` */
	}


	/*
	 * Base structure
	 */

	/*body {
	  text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
	  box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
	}

	.cover-container {
	  max-width: 42em;
	}*/


	/*
	 * Header
	 */

	.nav-masthead .nav-link {
	  color: rgba(255, 255, 255, .5);
	  border-bottom: .25rem solid transparent;
	}

	.nav-masthead .nav-link:hover,
	.nav-masthead .nav-link:focus {
	  border-bottom-color: rgba(255, 255, 255, .25);
	}

	.nav-masthead .nav-link + .nav-link {
	  margin-left: 1rem;
	}

	.nav-masthead .active {
	  color: #fff;
	  border-bottom-color: #fff;
	}

	.form-signin {
	  max-width: 330px;
	  padding: 1rem;
	}

	.form-signin .form-floating:focus-within {
	  z-index: 2;
	}

	.form-signin input[type="email"] {
	  margin-bottom: -1px;
	  border-bottom-right-radius: 0;
	  border-bottom-left-radius: 0;
	}

	.form-signin input[type="password"] {
	  margin-bottom: 10px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}

      .dropdown-item-danger {
	  color: var(--bs-red);
	}
	.dropdown-item-danger:hover,
	.dropdown-item-danger:focus {
	  color: #fff;
	  background-color: var(--bs-red);
	}
	.dropdown-item-danger.active {
	  background-color: var(--bs-red);
	}

	.btn-hover-light {
	  color: var(--bs-body-color);
	  background-color: var(--bs-body-bg);
	}
	.btn-hover-light:hover,
	.btn-hover-light:focus {
	  color: var(--bs-link-hover-color);
	  background-color: var(--bs-tertiary-bg);
	}

	.cal-month,
	.cal-days,
	.cal-weekdays {
	  display: grid;
	  grid-template-columns: repeat(7, 1fr);
	  align-items: center;
	}
	.cal-month-name {
	  grid-column-start: 2;
	  grid-column-end: 7;
	  text-align: center;
	}
	.cal-weekday,
	.cal-btn {
	  display: flex;
	  flex-shrink: 0;
	  align-items: center;
	  justify-content: center;
	  height: 3rem;
	  padding: 0;
	}
	.cal-btn:not([disabled]) {
	  font-weight: 500;
	  color: var(--bs-emphasis-color);
	}
	.cal-btn:hover,
	.cal-btn:focus {
	  background-color: var(--bs-secondary-bg);
	}
	.cal-btn[disabled] {
	  border: 0;
	  opacity: .5;
	}

	.w-220px {
	  width: 220px;
	}

	.w-280px {
	  width: 280px;
	}

	.w-340px {
	  width: 340px;
	}

	.opacity-10 {
	  opacity: .1;
	}


</style>