const categoryDocuments = {
  "os-private": [
    "Filled out Scholarship Application Form with 1x1 picture (1 page only back-to-back)",
    "Letter addressed to Gov. Daniel R. Ferndando (Handwritten in short or legal bond paper)",
    "Barangay Clearance from the place of residence (Original)",
    "Certificate of Registration COR 1st Semester SY 2024-2025 (Original and Photocopy)",
    "Certificate of Grades COG 2nd Semester SY 2023-2024 (Original and Photocopy)",
    "Certificate of Registration COR 2nd Semester SY 2023-2024 (Original and Photocopy)",
    "Photocopy of Birth Certificate",
    "Photocopy of School ID or National ID (Front and back with handwritten complete name w/ signature, complete address, and contact no.) (2 copies)"
  ],
  "suc-lc": [
    "Filled out Scholarship Application Form with 1x1 picture (1 page only back-to-back)",
    "Letter addressed to Gov. Daniel R. Ferndando (Handwritten in short or legal bond paper)",
    "Barangay Clearance from the place of residence (Original)",
    "Certificate of Registration COR 1st Semester SY 2024-2025 (Original and Photocopy)",
    "Certificate of Grades COG 2nd Semester SY 2023-2024 (Original and Photocopy)",
    "Certificate of Registration COR 2nd Semester SY 2023-2024 (Original and Photocopy)",
    "Photocopy of School ID or National ID (Front and back with handwritten complete name w/ signature, complete address, and contact no.) (2 copies)"
  ],
  "shs-public": [
    "Filled out Scholarship Application Form with 1x1 picture (1 page only back-to-back)",
    "Letter addressed to Gov. Daniel R. Ferndando (Handwritten in short or legal bond paper)",
    "Barangay Clearance from the place of residence (Original)",
    "Certificate of Enrollment/Registration (COE/COR SY 2024-2025) (Original/Photocopy)",
    "Report Card AY 2023-2024 for Grade 11 & 12 (Photocopy)",
    "Photocopy of Certificate of Completion for Incoming Grade 11 (Original and Photocopy)",
    "Photocopy of National ID or School ID (Front and back with handwritten complete name w/signature, complete address, and contact no.) (2 copies)"
  ],
  "shs-private": [
    "Filled out Scholarship Application Form with 1x1 picture (1 page only back-to-back)",
    "Letter addressed to Gov. Daniel R. Ferndando (Handwritten in short or legal bond paper)",
    "Barangay Clearance from the place of residence (Original)",
    "Certificate of Enrollment/Registration (COE/COR SY 2024-2025) (Original/Photocopy)",
    "Report Card AY 2023-2024 for Grade 11 & 12 (Photocopy)",
    "Photocopy of Certificate of Completion for Incoming Grade 11 (Original and Photocopy)",
    "Photocopy of Birth Certificate",
    "Photocopy of National ID or School ID (Front and back with handwritten complete name w/signature, complete address, and contact no.) (2 copies)"
  ]
};



document.addEventListener("DOMContentLoaded", () => {
  const selectedCategory = localStorage.getItem("selectedCategory");
  if (selectedCategory && categoryDocuments[selectedCategory]) {
    populateDocumentList(categoryDocuments[selectedCategory]);
  } else {
    alert("No category selected. Please go back and select a category.");
    window.location.href = "/sad-final-project/sad-final-project/html/applicants-pages/applicants-html-application/applicants-application.php";
  }
});

function populateDocumentList(documents) {
  const documentListContainer = document.getElementById("document-list");
  documentListContainer.innerHTML = "";

  documents.forEach((docName) => {
    const card = document.createElement("div");
    card.className = "document-content-card";
    card.innerHTML = `
      <p>${docName}</p>
      <div>
        <button class="choose-file-button">Choose File</button>
        <input type="file" name="file" accept=".pdf" style="display: none;" id = "file-input"/>
        <p class="application-file-status">Empty</p>
        <button class="replace-file-button">Replace</button>
      </div>
    `;
    documentListContainer.appendChild(card);
  });

  initializeButtonEvents();
}

function initializeButtonEvents() {
  document.querySelectorAll(".choose-file-button").forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      const fileInput = button.nextElementSibling; //get file input
      //const fileInput = document.querySelector('#file-input')
      fileInput.click(); //open that shii

      fileInput.addEventListener("change", () => {
        const fileStatus = button.nextElementSibling.nextElementSibling; //get yung status
        fileStatus.textContent = "Uploaded"; //change yung status pag na upload na
        //fileStatus.style.color = "green";
      });
    });
  });

  document.querySelectorAll(".replace-file-button").forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      const fileInput = button.previousElementSibling.previousElementSibling; //get file input
      showReplacePopup(fileInput);
    });
  });
}

function showReplacePopup(fileInput) {
  Swal.fire({
    title: "Replace File",
    icon: "question",
    showCancelButton: true, //true
    cancelButtonText: "Cancel",
    confirmButtonText: "View File", //view file
    showDenyButton: true, //delete 
    denyButtonText: "Delete File",
  }).then((result) => { //if ano yung cinlick
    if (result.isConfirmed) { //if pinindot si view file
      if (fileInput.files[0]) {//file uploaded
        const fileURL = URL.createObjectURL(fileInput.files[0]);
        alert(fileURL);
        Swal.fire({
          title: "Uploaded File",
          html: `<iframe src="${fileURL}" width="100%" height="400px"></iframe>`,
          showCloseButton: true,
        });
      } else {
        Swal.fire("No file uploaded to view!", "", "error");
      }
    } else if (result.isDenied) { //if pinindot si delete
      //TODO: check muna if may file, pag alang file, dapat bawal mag delete
      fileInput.value = ""; //remove
      fileInput.nextElementSibling.textContent = "Empty"; //change status
      //fileInput.nextElementSibling.style.color = "red"; //change color
      Swal.fire("File has been deleted", "", "success");
    }
  });
}


document.getElementById("application-form-submit-button").addEventListener("click", (e) => {
  e.preventDefault(); 

  const filesArray = []; 

  document.querySelectorAll("input[type='file']").forEach((fileInput) => {
    if (fileInput.files[0]) { //push sa array if nag exist yung file
      filesArray.push(fileInput.files[0]);
    }
  });

  //test print
  if (filesArray.length > 0) {
    console.log("Uploaded Files:");
    filesArray.forEach((file, index) => {
      console.log(`File ${index + 1}:`, file.name, file.size, file.type);
    });
  } else {
    alert("No files uploaded.");
  }
});

