const message = "iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii";

console.log("<!DOCTYPE html><html><head><meta charset='utf-8'/><title>Loop 500 Demo</title></head><body>");
console.log("<h1>Loop 500 Output</h1>");
console.log("<ol>");
for (let i = 1; i <= 500; i++) {
  console.log(`<li>${i}. ${message}</li>`);
}
console.log("</ol>");
console.log("<p>Done: outputted 500 lines.</p>");
console.log("</body></html>");