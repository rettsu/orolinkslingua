	<footer class="py-5">
	    <div class="row">
	      <div class="col-6 col-md-4 mb-3">
	        <h5>OROLinks Lingua</h5>
	        <ul class="nav flex-column">
	          <li class="nav-item mb-2"><a href="{{ route('index') }}" class="nav-link p-0 text-body-secondary">Home</a></li>
	          <li class="nav-item mb-2"><a href="{{ route('pagenotfound') }}" class="nav-link p-0 text-body-secondary">Features</a></li>
	          <li class="nav-item mb-2"><a href="{{ route('faq') }}" class="nav-link p-0 text-body-secondary">FAQs</a></li>
	          <li class="nav-item mb-2"><a href="{{ route('about') }}" class="nav-link p-0 text-body-secondary">About</a></li>
	          <li class="nav-item mb-2"><a href="{{ route('pagenotfound') }}" class="nav-link p-0 text-body-secondary">Documentations</a></li>
	        </ul>
	      </div>

	      <div class="col-md-5 offset-md-1 mb-3">
	        <form>
	          <h5>Subscribe to our newsletter</h5>
	          <p>Monthly digest of what's new and exciting from us.</p>
	          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
	            <label for="newsletter1" class="visually-hidden">Email address</label>
	            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
	            <button class="btn btn-primary" type="button">Subscribe</button>
	          </div>
	        </form>
	      </div>
	    </div>
	  </footer>
	<div class="d-flex flex-column flex-sm-row align-items-center justify-content-center py-4 my-4 border-top">
	      <p>&copy; 2024 OROLinks Lingua, All rights reserved.</p>
	</div>
{{-- Popper, Dropdowns, popovers, tooltips --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="{{ asset('assets/dist/js/bootstrap.min.js') }}" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<!-- Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://icons.getbootstrap.com/assets/js/vendor/bootstrap.bundle.min.js"></script>
<script async="" src="https://getbootstrap.com/docs/5.3/assets/js/validate-forms.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@docsearch/js@3"></script>
<script src="https://cdn.jsdelivr.net/npm/@stackblitz/sdk@1/bundles/sdk.umd.js"></script>
<script src="/docs/5.3/assets/js/docs.min.js"></script>

<script type="text/javascript">
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(() => {
	  'use strict'

	  // Fetch all the forms we want to apply custom Bootstrap validation styles to
	  const forms = document.querySelectorAll('.needs-validation')

	  // Loop over them and prevent submission
	  Array.from(forms).forEach(form => {
	    form.addEventListener('submit', event => {
	      if (!form.checkValidity()) {
	        event.preventDefault()
	        event.stopPropagation()
	      }

	      form.classList.add('was-validated')
	    }, false)
	  })
	})()

	/* global bootstrap: false */

	(() => {
	  'use strict'

	  // Tooltip and popover demos
	  document.querySelectorAll('.tooltip-demo')
	    .forEach(tooltip => {
	      new bootstrap.Tooltip(tooltip, {
	        selector: '[data-bs-toggle="tooltip"]'
	      })
	    })

	  document.querySelectorAll('[data-bs-toggle="popover"]')
	    .forEach(popover => {
	      new bootstrap.Popover(popover)
	    })

	  document.querySelectorAll('.toast')
	    .forEach(toastNode => {
	      const toast = new bootstrap.Toast(toastNode, {
	        autohide: false
	      })

	      toast.show()
	    })

	  // Disable empty links and submit buttons
	  document.querySelectorAll('[href="#"], [type="submit"]')
	    .forEach(link => {
	      link.addEventListener('click', event => {
	        event.preventDefault()
	      })
	    })

	  function setActiveItem() {
	    const { hash } = window.location

	    if (hash === '') {
	      return
	    }

	    const link = document.querySelector(`.bd-aside a[href="${hash}"]`)

	    if (!link) {
	      return
	    }

	    const active = document.querySelector('.bd-aside .active')
	    const parent = link.parentNode.parentNode.previousElementSibling

	    link.classList.add('active')

	    if (parent.classList.contains('collapsed')) {
	      parent.click()
	    }

	    if (!active) {
	      return
	    }

	    const expanded = active.parentNode.parentNode.previousElementSibling

	    active.classList.remove('active')

	    if (expanded && parent !== expanded) {
	      expanded.click()
	    }
	  }

	  setActiveItem()
	  window.addEventListener('hashchange', setActiveItem)
	})()

</script>

</body>
</html>