// src/js/helpers/local-time.js
function localTime() {
  const elements = document.querySelectorAll(".local-time");
  if (!elements.length) return;
  elements.forEach((el) => {
    const zone = el.id || "Europe/Prague";
    const now = /* @__PURE__ */ new Date();
    const options = {
      timeZone: zone,
      timeZoneName: "short",
      hour: "2-digit",
      hour12: true,
      minute: "2-digit"
    };
    const formatter = new Intl.DateTimeFormat([], options);
    const timeText = formatter.format(now);
    el.textContent = "";
    el.textContent = timeText;
  });
}
localTime();
setInterval(localTime, 6e4);

// src/js/screen.js
localTime();
