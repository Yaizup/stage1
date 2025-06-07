class Carousel {
  constructor(el) {
    this.el = el;
    this.carouselOptions = ['previous', 'next'];
    this.carouselData = [
      {
        'id': '1',
        'src': 'ressource/materiel/tablette_allumée.png',
        'name': 'Tablette Samsung Galaxy Tab A',
      },
      {
        'id': '2',
        'src': 'ressource/materiel/casque.png',
        'name': 'Casque Steelseries arctis 5',
      },
      {
        'id': '3',
        'src': 'ressource/materiel/htc_vive_focus3_manettes.png',
        'name': 'Casque VR HTC Vive Focus 3',
      },
      {
        'id': '4',
        'src': 'ressource/materiel/micro.png',
        'name': 'Microphone HyperX QuadCast',
      },
      {
        'id': '5',
        'src': 'ressource/materiel/manette_haut.png',
        'name' : 'Manette sans fil USB MSI',
      },
      {
        'id': '6',
        'src': 'ressource/materiel/drone_biais.png',
        'name': 'Drone tello EDU',
      },
      {
        'id': '7',
        'src': 'ressource/materiel/GoPro_dos.png',
        'name': 'GoPro Max',
      },
      {
        'id': '8',
        'src': 'ressource/materiel/projo.png',
        'name': 'Projecteur laser LG',
      },
      {
        'id': '9',
        'src': 'ressource/materiel/casque_RA.png',
        'name': 'Casque de réalité augmentée HoloLense',
      },
      {
        'id': '10',
        'src': 'ressource/materiel/theta.png',
        'name': 'Caméra 360°RICOH THETA',
      },
      {
        'id': '11',
        'src': 'ressource/materiel/wacom_one.png',
        'name': 'Tablette graphique Wacom One',
      },
      {
        'id': '12',
        'src': 'ressource/materiel/webcam.png',
        'name': 'Webcam Logitech BRIO',
      }
    ];
    this.carouselInView = [1, 2, 3, 4, 5];
    this.carouselContainer;
  }

  mounted() {
    this.setupCarousel();
  }

  // Build carousel html
  setupCarousel() {
    const container = document.createElement('div');
    const controls = document.createElement('div');

    // Add container for carousel items and controls
    this.el.append(container, controls);
    container.className = 'carousel-container';
    controls.className = 'carousel-controls';

    // Take dataset array and append items to container
    this.carouselData.forEach((item, index) => {
      const carouselItem = item.src ? document.createElement('img') : document.createElement('div');

      container.append(carouselItem);
      
      // Add item attributes
      carouselItem.className = `carousel-item carousel-item-${index + 1}`; 
      carouselItem.src = item.src;
      // carouselItem.setAttribute('loading', 'lazy');
      // Used to keep track of carousel items, infinite items possible in carousel however min 5 items required
      carouselItem.setAttribute('data-index', `${index + 1}`);
    });

    this.carouselOptions.forEach((option) => {
      const btn = document.createElement('img');
      btn.src = "ressource/icones/fleche-droite.png";
      const axSpan = document.createElement('span');

      // Add accessibilty spans to button
      axSpan.innerText = option;
      axSpan.className = 'ax-hidden';
      btn.append(axSpan);

      // Add button attributes
      btn.className = `carousel-control carousel-control-${option}`;
      btn.setAttribute('data-name', option);

      // Add carousel control options
      controls.append(btn);
    });

    // After rendering carousel to our DOM, setup carousel controls' event listeners
    this.setControls([...controls.children]);

    // Set container property
    this.carouselContainer = container;

    this.carouselData.slice(0,3).forEach((data) => {
      document.querySelector(`.item-name`).innerText = data.name;
    });
  }

  setControls(controls) {
    controls.forEach(control => {
      control.onclick = (event) => {
        event.preventDefault();

        // Manage control actions, update our carousel data first then with a callback update our DOM
        this.controlManager(control.dataset.name);
      };
    });
  }

  controlManager(control) {
    if (control === 'previous') return this.previous();
    if (control === 'next') return this.next();
    return;
  }

  previous() {
    // Update order of items in data array to be shown in carousel
    this.carouselData.unshift(this.carouselData.pop());

    // Push the first item to the end of the array so that the previous item is front and center
    this.carouselInView.push(this.carouselInView.shift());

    // Update the css class for each carousel item in view
    this.carouselInView.forEach((item, index) => {
      this.carouselContainer.children[index].className = `carousel-item carousel-item-${item}`;
    });

    // Using the first 5 items in data array update content of carousel items in view
    this.carouselData.slice(0, 5).forEach((data, index) => {
      document.querySelector(`.carousel-item-${index + 1}`).src = data.src;
    });
    
    this.carouselData.slice(0,3).forEach((data, index) => {
      document.querySelector(`.item-name`).innerText = data.name;
    });
  }

  next() {
    // Update order of items in data array to be shown in carousel
    this.carouselData.push(this.carouselData.shift());

    // Take the last item and add it to the beginning of the array so that the next item is front and center
    this.carouselInView.unshift(this.carouselInView.pop());

    // Update the css class for each carousel item in view
    this.carouselInView.forEach((item, index) => {
      this.carouselContainer.children[index].className = `carousel-item carousel-item-${item}`;
    });

    // Using the first 5 items in data array update content of carousel items in view
    this.carouselData.slice(0, 5).forEach((data, index) => {
      document.querySelector(`.carousel-item-${index + 1}`).src = data.src;
    });

    this.carouselData.slice(0,3).forEach((data, index) => {
      document.querySelector(`.item-name`).innerText = data.name;
    });
  }
}

// Refers to the carousel root element you want to target, use specific class selectors if using multiple carousels
const el = document.querySelector('.carousel');
// Create a new carousel object
const exampleCarousel = new Carousel(el);
// Setup carousel and methods
exampleCarousel.mounted();