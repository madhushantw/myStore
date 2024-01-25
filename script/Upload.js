var form = document.getElementById('form');
var aSection = document.getElementById('main-section');
var items = document.getElementById('container');
var aCard = document.getElementById('cardRow');

var sfName = document.getElementById('sfName');
var company = document.getElementById('sfCompany');
var devloper = document.getElementById('sfDeveloper');
var flatForm = document.getElementById('flatform');
var category = document.getElementById('sftType');

// Image input
var hPreviwe = document.getElementById('hPreview');
var cImgBtn = document.getElementById('cBtn');
var iPreviwe = document.getElementById('iPreview');
var iImgBtn = document.getElementById('iBtn');

// slidee
const addSlideBtn = document.getElementById("addSlide");
const customAddSlideBtn = document.getElementById("custom-btn");
var imgSlider = document.getElementById('imgSlider');



function addCover(e){
  if(e.target.files.length > 0){
    var src = URL.createObjectURL(e.target.files[0]);
    hPreviwe.src = src;
    hPreviwe.style.display = 'block';
    document.getElementById('hLable').textContent = 'Change';    
  }
}
function addIcon(e){
  if(e.target.files.length > 0){
    var src = URL.createObjectURL(e.target.files[0]);
    iPreviwe.src = src;
    iPreviwe.style.display = 'block';
    document.getElementById('iLable').textContent = 'Change';
  }
}

// Slider-----------------

function addSlideBtnActive(e){
  e.preventDefault();
  addSlideBtn.click();
}
var addBtn = document.getElementById('custom-btn-add');
addBtn.addEventListener("click", function(e){
  e.preventDefault();
  addSlideBtn.click();
});


addSlideBtn.addEventListener("change", SelectImg);
function SelectImg(e){
    
    //imgSlider.removeChild(imgSlider.lastChild);
    // New Slide for wrap
    var newSlid = document.createElement('div');
    newSlid.className = 'sliders';
    newSlid.id = 'sliders';

    // New Img div
    var newImg = document.createElement('div');
    newImg.className = 'image';

    // Create new img 
    var img = document.createElement('img');
      
    // Put Url of selected img
    var src = URL.createObjectURL(e.target.files[0]);
    img.src = src;
    img.style.display = 'block';

    // Appennd to new img Div
    newImg.appendChild(img);

    // cansel btn
    var cansel = document.createElement('lable');
    cansel.className = 'cancel-btn';
    cansel.id = 'cancel-btn';
    cansel.style.display = 'flex';
    cansel.style.cursor ='pointer'
    cansel.textContent = "✖";

    // All three items Append to newSlide
    newSlid.appendChild(newImg);
    newSlid.appendChild(cansel);
    imgSlider.appendChild(newSlid);

    // add btn
    // var newSlidPlus = document.createElement('div');
    // newSlidPlus.className = 'sliders';
    // newSlidPlus.id = 'sliders';
    // var addbtn = document.createElement('div');
    // addbtn.className = "custom-btn-add";
    // newSlidPlus.appendChild(addBtn);
    // imgSlider.appendChild(newSlidPlus);
}

//For Remeove
form.addEventListener('click',removeSlide);
// RemoveNode
function removeSlide(e){
  if(e.target.id === 'cancel-btn'){
    if(confirm("Are you sure")){
      // Delete note
      imgSlider.removeChild(e.target.parentElement);
    }
  }
}


// Discription
var cardRow = document.getElementById("cardRow");
var disTitle = document.getElementById("disTitle");
var disBody = document.getElementById("disBody");

form.addEventListener('click',removCard);
function removCard(e){
  if(e.target.id === 'dlt'){
      if(confirm("Are you sure")){
          // Delete note
          var card = e.target.parentElement;
          cardRow.removeChild(card);
      }
  }
}

//Discription---------------------
i = 0;
dInput.addEventListener('click', addDis);
function addDis(e){
  e.preventDefault();
  if(e.target.id === 'btnAddDis'){

    var dCard = document.createElement('div');
    dCard.className = 'card';
    dCard.name = 'card';
    

    var cTitle = document.createElement('input');
    cTitle.setAttribute("name", i+'disTitle');
    cTitle.setAttribute("class", "inputCtrl");
    cTitle.setAttribute("type", "text");
    cTitle.setAttribute("value", document.getElementById("disTitle").value);

    var cBody = document.createElement('textarea');
    cBody.setAttribute("name", i+'disBody');
    cBody.setAttribute("class", "inputCtrl");
    //cBody.setAttribute("value", document.getElementById("disBody").value);
    //cBody.textContent = getElementById("disBody").textContent;
    cBody.value = document.getElementById("disBody").value;

    var cancel = document.createElement('lable');
    cancel.className = 'cancel-btn';
    cancel.id = 'dlt';
    cancel.style.display = 'flex';
    cancel.style.cursor ='pointer'
    cancel.textContent = "✖"
  
     dCard.appendChild(cTitle);
     dCard.appendChild(cBody);
     dCard.appendChild(cancel);
    
    
    cardRow.appendChild(dCard);

    disBody.value = '';
    disTitle.value = '';

    i++;
  }
}

function TopcAddNote(e){
    e.preventDefault();
    // Create contaner - 1
    var con1 = document.createElement('div');
    con1.className = 'container';
    
    var h1 = document.createElement('h1');
    h1.className = 'topicApp';
    h1.appendChild(document.createTextNode(sfName.value));

    var span1 = document.createElement('span');
    span1.appendChild(document.createTextNode(company.value));

    var span2 = document.createElement('span');
    span2.appendChild(document.createTextNode(devloper.value));

    var span3 = document.createElement('span');
    span3.appendChild(document.createTextNode(flatForm.value));

    var span4 = document.createElement('span');
    span4.appendChild(document.createTextNode(category.value));

    // Add all to container - 1
    con1.appendChild(h1);
    con1.appendChild(span1);
    con1.appendChild(span2);
    con1.appendChild(span3);
    con1.appendChild(span4);
}










