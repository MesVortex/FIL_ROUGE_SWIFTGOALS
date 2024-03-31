<x-main-layout>
  <section class="w-screen h-screen bg-gray-900 flex justify-center items-center gap-20">
    <div id='priority1' class="h-96 w-60 border-2 border-white border-dashed p-10 space-y-10">
      <div value="" type="text" class="w-full bg-blue-700 text-white py-5 rounded-2xl text-center step" draggable="true">
        step 1
      </div>
      <div class="w-full bg-blue-700 text-white py-5 rounded-2xl text-center step" draggable="true">
        step 2
      </div>
    </div>
    <div id='priority2' class="h-96 w-60 border-2 border-white border-dashed p-10 space-y-10">
    </div>
    <div id='priority3' class="h-96 w-60 border-2 border-white border-dashed p-10 space-y-10">
    </div>
  </section>

  <script>
    let steps = document.getElementsByClassName('step');
    let priority1 = document.getElementById('priority1');
    let priority2 = document.getElementById('priority2');
    let priority3 = document.getElementById('priority3');

    for (step of steps) {
      step.addEventListener('dragstart', function(e) {
        let selectedStep = e.target;

        priority1.addEventListener('dragover', function(e) {
          e.preventDefault();
        });
        priority1.addEventListener('drop', function(e) {
          priority1.appendChild(selectedStep);
          selectedStep = null;
        });

        priority2.addEventListener('dragover', function(e) {
          e.preventDefault();
        });
        priority2.addEventListener('drop', function(e) {
          priority2.appendChild(selectedStep);
          selectedStep = null;
        });

        priority3.addEventListener('dragover', function(e) {
          e.preventDefault();
        });
        priority3.addEventListener('drop', function(e) {
          priority3.appendChild(selectedStep);
          selectedStep = null;
        });
      });

      step.addEventListener('dblclick', function(e) {
        console.log('here');
        changeToInput(e.target);
      });
    }


    function changeToInput(stepDiv) {
      var stepInput = document.createElement("input");
      var divContent = stepDiv.textContent;

      for (var i = 0; i < stepDiv.attributes.length; i++) {
        var attr = stepDiv.attributes[i];
        stepInput.setAttribute(attr.name, attr.value);
      }

      while (stepDiv.firstChild) {
        stepInput.appendChild(stepDiv.firstChild);
      }

      stepInput.value = divContent;
      stepDiv.parentNode.replaceChild(stepInput, stepDiv);

      // Listen for click events on the document body
      document.body.addEventListener("click", function(event) {
        if (event.target !== stepInput) {
          resetToDiv();
        }
      });
    }

    function resetToDiv() {
      var stepInput = document.querySelector("input");

      if (stepInput) {
        var newDiv = document.createElement("div");
        var inputValue = stepInput.value;

        for (var i = 0; i < stepInput.attributes.length; i++) {
          var attr = stepInput.attributes[i];
          newDiv.setAttribute(attr.name, attr.value);
        }

        // Transfer child nodes from the new input to the new div
        while (stepInput.firstChild) {
          newDiv.appendChild(stepInput.firstChild);
        }

        newDiv.textContent = inputValue;
        stepInput.parentNode.replaceChild(newDiv, stepInput);
      }
    }
  </script>

</x-main-layout>