function toggleChannels(element) {
  const channels = element.nextElementSibling;
  if (channels.style.display === 'none' || channels.style.display === '') {
    channels.style.display = 'block';
    element.querySelector('i').classList.remove('fa-chevron-down');
    element.querySelector('i').classList.add('fa-chevron-up');
  } else {
    channels.style.display = 'none';
    element.querySelector('i').classList.remove('fa-chevron-up');
    element.querySelector('i').classList.add('fa-chevron-down');
  }
}