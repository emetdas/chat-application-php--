const form = document.querySelector(".typing-area"),
  message = form.querySelector(".message"),
  Btn = form.querySelector("button"),
  chatBox = document.querySelector(".chat-box");
form.onsubmit = (e) => {
  e.preventDefault();
};
Btn.onclick = () => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/chat.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        message.value = "";
      }
    }
  };
  let formData = new FormData(form);
  xhr.send(formData);
};
chatBox.onmouseenter = () => {
  chatBox.classList.add("active");
};
chatBox.onmouseleave = () => {
  chatBox.classList.remove("active");
};
setInterval(() => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/get-chat.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        chatBox.innerHTML = data;
        if (!chatBox.classList.contains('active')) {
          scrollToBottom();
        }
      }
    }
  };
  let formData = new FormData(form);
  xhr.send(formData);
}, 500);
function scrollToBottom() {
  chatBox.scrollTop = chatBox.scrollHeight;
}
