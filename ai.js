document.getElementById("aiForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const age = document.getElementById("age").value;
  const relation = document.getElementById("relation").value.toLowerCase();
  const occasion = document.getElementById("occasion").value.toLowerCase();
  const interests = document.getElementById("interests").value.toLowerCase();

  let suggestion = `🎁 Based on your input, we recommend: `;

  if (occasion.includes("birthday") && interests.includes("music")) {
    suggestion += "a custom music box with a birthday tune!";
  } else if (relation.includes("father") && occasion.includes("anniversary")) {
    suggestion += "a personalized watch engraved with a message.";
  } else if (age < 10) {
    suggestion += "a cartoon-themed name mug with their photo.";
  } else {
    suggestion += "a photo frame gift set with personalized quotes.";
  }

  document.getElementById("result").innerText = suggestion;
});
