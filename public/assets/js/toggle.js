document.addEventListener('DOMContentLoaded', () => {
  const sidebar = document.getElementById('sidebar');
  const content = document.getElementById('content');
  const hamburgerBtn = document.getElementById('hamburgerBtn');

  hamburgerBtn.addEventListener('click', () => {
    sidebar.classList.toggle('open'); // Toggles the sidebar visibility
    content.classList.toggle('shifted'); // Shifts content when sidebar is opened
    hamburgerBtn.classList.toggle('open'); // Animates the hamburger button
  });
});



// document.addEventListener('DOMContentLoaded', () => {
//   const searchInput = document.getElementById('searchInput'); // Make sure your input has this ID

//   // Trigger search when the user presses Enter
//   searchInput.addEventListener('keypress', function (e) {
//     if (e.key === 'Enter') {
//       const query = searchInput.value;

//       // ✅ Fetch to your backend route (adjust if using site_url or base_url)
//       fetch(`/search?q=${encodeURIComponent(query)}`)
//         .then(res => res.json())
//         .then(data => {
//           console.log('Raw response:', data); // ✅ Debug
//           displayResults(data); // Call your rendering function
//         })
//         .catch(err => {
//           console.error('Search error:', err);
//         });
//     }
//   });
// });

// // Function to show results
// function displayResults(response) {
//   const results = response.results; // Make sure you return { results: [...] }
//   const content = document.getElementById('homeContent');
//   content.innerHTML = `<h1>Search Results</h1>`;

//   if (!results || results.length === 0) {
//     content.innerHTML += `<p>No results found.</p>`;
//   } else {
//     results.forEach(post => {
//       content.innerHTML += `
//         <div class="search-result">
//           <h3>${post.id}</h3>
//           <p>${post.description}</p>
//         </div>
//       `;
//     });
//   }
// }





// document.addEventListener('DOMContentLoaded', () => {
//   const searchInput = document.getElementById('searchInput'); // input element

//   // Live search as user types
//   searchInput.addEventListener('input', function () {
//     const query = searchInput.value.trim();

//     // Only search if input is not empty
//     if (query.length > 0) {
//       fetch(`/search?q=${encodeURIComponent(query)}`)
//         .then(res => res.json())
//         .then(data => {
//           console.log('Live search results:', data);
//           displayResults(data);
//         })
//         .catch(err => {
//           console.error('Search error:', err);
//         });
//     } else {
//       clearResults(); // Optional: clear content if input is empty
//     }
//   });
// });

// // Function to display search results           <h3>${post.id}</h3> --- put together with  post.descripition}

// function displayResults(response) {
//   const results = response.results; // expected: { results: [...] }
//   const content = document.getElementById('adventuresContent');
//   content.innerHTML = `<h1>Search Results</h1>`;

//   if (!results || results.length === 0) {
//     content.innerHTML += `<p>No results found.</p>`;
//   } else {
//     results.forEach(post => {
//       content.innerHTML += `
//         <div class="search-result">
//           <p>${post.description}</p>
//         </div>
//       `;
//     });
//   }
// }

// // Optional: Clear content when search input is empty
// function clearResults() {
//   const content = document.getElementById('adventuresContent');
//   content.innerHTML = `
//     <h1>Adventures</h1>
//   <p>List of adventures available.</p>
//   `;
// }

document.addEventListener('DOMContentLoaded', () => {
  const searchInput = document.getElementById('searchInput');
  const searchResults = document.getElementById('searchResults');

  if (searchInput) {
    // Live search as user types
    searchInput.addEventListener('input', function () {
      const query = searchInput.value.trim();

      if (query.length > 0) {
        fetch(`/search?q=${encodeURIComponent(query)}`)
          .then(res => res.json())
          .then(data => {
            console.log('Live search results:', data);
            displayResults(data);
          })
          .catch(err => {
            console.error('Search error:', err);
          });
      } else {
        clearResults();
      }
    });
  }

  // Function to display results in the correct section
  function displayResults(response) {
    const results = response.results;
    const searchResults = document.getElementById('searchResults');
    searchResults.innerHTML = ''; // Clear previous results
  
    if (!results || results.length === 0) {
      searchResults.innerHTML = `<p class="no-results">No results found.</p>`;
    } else {
      results.forEach(post => {
        searchResults.innerHTML += `
          <div class="result-card">
            <div class="result-body">
<p class="result-text" style="color: red;"><strong>Model: ${post.description}</strong></p>
                            <p class="result-text"> </i><span> Released Last</span> ${post.created_at}</p>

            </div>
          </div>
        `;
      });
    }
  }
  
  function clearResults() {
    searchResults.innerHTML = '';
  }
});



  // For upload form
//  For upload form
        document.addEventListener('DOMContentLoaded', function () {
          const uploadForm = document.getElementById('uploadForm');
          const excelFileInput = document.getElementById('excelFile');
        
          if (uploadForm && excelFileInput) {
            uploadForm.addEventListener('submit', function (event) {
              event.preventDefault();
        
              const file = excelFileInput.files[0];
              if (!file) {
                message('warning', 'Please select an Excel file to upload.', 2000);
                return;
              }
        
              const formData = new FormData();
              formData.append('excel_file', file);
        
              // Use the reusable send function
              send('/YourController/uploadExcel', formData, true, function (response) {
                console.log("Upload Callback:", response); // Optional debug
                if (response.success) {
                  uploadForm.reset();
                }
              });
            });
          }
        });
        
