<button id="button" onclick="myFunction()">Click me</button>
<div id="open" style="display: none;">
<a id="close">Close the text</a><br>
<h1 class="underline">JS is easy to learn or PHP?</h1>
    <h8>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima voluptates eum veniam <br> tenetur rem quae, laudantium mollitia eveniet, exercitationem explicabo provident voluptas adipisci <br> iste expedita ullam obcaecati nisi reiciendis sunt.</h8>
</div>
<script>
    function myFunction()
    {
        var id = document.getElementById('open');
        id.style.display = 'block';
    }
    document.getElementById('close').addEventListener('click', function(event){
      document.getElementById('open').style.display = 'none';
    });
</script>