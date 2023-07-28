const faqElems = [...document.querySelectorAll('.faq__item')]

const modalClickButton = [...document.querySelectorAll('.modal-click')]
const modal = document.getElementById('modal')
const modalBody = document.getElementById('modalBody')
const modalCloseClickButton = document.getElementById('modalClose')


const disableScroll = () => {
    document.body.style.overflow = 'hidden'
}

const enableScroll = () => {
    document.body.style.overflow = ''
}

const showSuccessMessage = () => {
    document.getElementById('success').hidden = false
    
    setTimeout(() => {
      document.getElementById('success').hidden = true  
    }, 5000)
}

const handleFAQ = () => {
    faqElems.forEach((faqElem) => {
        
      faqElem.addEventListener('click', function (e) {
		e.preventDefault()
		faqElem.classList.toggle('active')
	  })
	  
	  window.addEventListener('click', function (e) {
        if (!faqElem.contains(e.target)) {
          faqElem.classList.remove('active');
        }
      });
    })
}

const handleModal = () => {
    modalClickButton.forEach((button) => {
      button.addEventListener('click', function (e) {
	    e.preventDefault()
		modal.classList.add('open')
		document.getElementById('service-field-name').value = button.dataset.servicename
		document.getElementById('service-field-price').value = button.dataset.serviceprice
	    disableScroll()
	  })
    })
    modalCloseClickButton.addEventListener('click', function (e) {
	    e.preventDefault()
		modal.classList.remove('open')
		enableScroll()
	})
}

const handleTabs = () => {
    const tabLabels = [...document.querySelectorAll(".tabs-heading__item")];
    const tabPanes = [...document.getElementsByClassName("tabs-content__list")];
    
    tabLabels.map((tab, index) => {
        tabLabels[0].classList.add('active');
        tabPanes[0].classList.add('active');
        
        tab.onclick = (e) => {
            window.addEventListener('click', function (ev) {
                if (!tab.contains(ev.target)) {
                    tab.classList.remove('active');
                }
            });
            
            if (index > 0) {
                tabLabels[0].classList.remove('active');
            }
            
            tabPanes.map((item) => {
                item.classList.remove('active')
            })
            
            e.target.classList.add('active')
            
            Number(tabPanes[index].dataset.id) === Number(e.target.getAttribute("data-id"))
            && tabPanes[Number(e.target.getAttribute("data-id")) - 1].classList.add('active')
        }
    })
}

const handleSwiper = () => {
    const reviewSwiper = new Swiper(".review-swiper", {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 30,
    
        pagination: {
          el: ".swiper-pagination",
        },
    
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        autoplay: {
            delay: 1500,
        },

        speed: 2000,
        
        breakpoints: {
            991: {
              slidesPerView: 2
            }
        }
        
      });
}

const handleMobileNav = () => {
    const navItems = [...document.querySelectorAll(".mobile_nav .with_parent")]
    const closeMenu = document.getElementById('close_nav')
    const openMenu = document.getElementById('open_nav')
    const mobileMenu = document.getElementById('nav')
    
    mobileMenu.hidden = true
    openMenu.onclick = () => {
        mobileMenu.hidden = false
        disableScroll()
    }
    
    closeMenu.onclick = () => {
        mobileMenu.hidden = true
        enableScroll()
    }
    
    navItems.forEach((item) => {
      item.children[1].hidden = true
      item.onclick = () => {
          item.children[1].hidden = !item.children[1].hidden;
      }
    })
    
      openMenu.hidden = true
      let scrollpos = window.scrollY
      const header = document.querySelector("header")
      const header_height = header.offsetHeight
    
      const add_class_on_scroll = () => openMenu.hidden = false
      const remove_class_on_scroll = () => openMenu.hidden = true
    
      window.addEventListener('scroll', function() { 
        scrollpos = window.scrollY;
        if (scrollpos >= header_height) { add_class_on_scroll() }
        else { remove_class_on_scroll() }
      })
}

const handleForms = () => {
    
}




const initScripts = {
  init: function () {
    handleFAQ()
    handleModal()
    handleTabs()
    handleSwiper()
    handleMobileNav()
  },
}
initScripts.init()