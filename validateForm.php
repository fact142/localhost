<form action="#"class="form">
  <p>
    <label for="n1">How old are you?</label>
    <input type="number" min="12" max="120" step="1" name="age"
           pattern="\d+">
  </p>
  <p>
    <label for="t1">What's your favorite language?</label>
    <input type="text" id="t1" name="fruit" list="l1" required
           pattern="[Jj]avaScript|[Pp]HP|[Gg]olang|[Ll]isp">
    <datalist id="l1">
      <option>JavaScript</option>
      <option>PHP</option>
      <option>Golang</option>
      <option>Lisp</option>
    </datalist>
  </p>
  <p>
    <label for="t2">What's your e-mail?</label>
    <input type="email" id="t2" name="email">
  </p>
    <button>Submit</button>
  </p>
</form>