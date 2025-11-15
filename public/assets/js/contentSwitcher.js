// contentSwitcher.js
document.addEventListener('DOMContentLoaded', function () {
  // Get all the buttons
  const homeBtn = document.getElementById('homeBtn');
  const adventuresBtn = document.getElementById('adventuresBtn');
  const inventoryBtn = document.getElementById('inventoryBtn');
  const settingsBtn = document.getElementById('settingsBtn');
  const exploreBtn = document.getElementById('exploreBtn');

  // Get the content sections
  const homeContent = document.getElementById('homeContent');
  const adventuresContent = document.getElementById('adventuresContent');
  const inventoryContent = document.getElementById('inventoryContent');
  const settingsContent = document.getElementById('settingsContent');
  const exploreContent = document.getElementById('exploreContent');

  // Hide all content sections initially
  const hideAllContent = () => {
    homeContent.classList.add('hidden');
    adventuresContent.classList.add('hidden');
    inventoryContent.classList.add('hidden');
    settingsContent.classList.add('hidden');
    exploreContent.classList.add('hidden');
  };

  // Add event listeners to the buttons
  homeBtn.addEventListener('click', function () {
    hideAllContent();
    homeContent.classList.remove('hidden');
  });

  adventuresBtn.addEventListener('click', function () {
    hideAllContent();
    adventuresContent.classList.remove('hidden');
  });

  inventoryBtn.addEventListener('click', function () {
    hideAllContent();
    inventoryContent.classList.remove('hidden');
  });

  settingsBtn.addEventListener('click', function () {
    hideAllContent();
    settingsContent.classList.remove('hidden');
  });

  exploreBtn.addEventListener('click', function () {
    hideAllContent();
    exploreContent.classList.remove('hidden');
  });
});
