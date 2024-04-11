let steps = document.getElementsByClassName("stepsForm");
let priority1 = document.getElementById("priority1");
let priority2 = document.getElementById("priority2");
let priority3 = document.getElementById("priority3");

for (step of steps) {
    handleDragStart = function (event) {
        let selectedStep = event.target;

        priority1.addEventListener("dragover", function (e) {
            e.preventDefault();
        });
        priority1.addEventListener("drop", function (e) {
            priority1.appendChild(selectedStep);
            selectedStep = null;
        });

        priority2.addEventListener("dragover", function (e) {
            e.preventDefault();
        });
        priority2.addEventListener("drop", function (e) {
            priority2.appendChild(selectedStep);
            selectedStep = null;
        });

        priority3.addEventListener("dragover", function (e) {
            e.preventDefault();
        });
        priority3.addEventListener("drop", function (e) {
            priority3.appendChild(selectedStep);
            selectedStep = null;
        });
    };
    // step.addEventListener("dragstart", handleDragStart);

    // step.addEventListener("dblclick", function (e) {
    //     changeToInput(e.target);
    // });
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

    stepInput.addEventListener("dragstart", handleDragStart);
    stepInput.addEventListener("dblclick", function (e) {
        changeToInput(e.target);
    });

    bodyClickListener = function (event) {
        if (event.target !== stepInput) {
            resetToDiv(stepInput);
        }
    };
    document.body.addEventListener("click", bodyClickListener);
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

        document.body.removeEventListener("click", bodyClickListener);

        newDiv.addEventListener("dragstart", handleDragStart);
        newDiv.addEventListener("dblclick", function (e) {
            changeToInput(e.target);
        });
    }
}

function createStep(priority) {
    var newDiv = document.createElement("div");
    newDiv.setAttribute(
        "class",
        "relative w-full group h-auto pr-6 text-start bg-white text-gray-700 p-2 rounded-lg shadow shadow-blue-700 transition-all stepsDiv"
    );
    newDiv.setAttribute("draggable", "true");
    newDiv.setAttribute("type", "text");
    newDiv.setAttribute("value", "");
    // newDiv.textContent = "new step";

    let newStep = `<div class="step" value="" name="steps[]">
                        new step
                    </div>
                    <a onclick="openModal(1)" class="absolute right-2 bottom-1 opacity-0 group-hover:opacity-100 text-gray-400 cursor-pointer transition-all duration-300 ease-in">
                        <i class="fa-regular fa-eye fa-lg ml-4"></i>
                    </a>`;
    newDiv.innerHTML = newStep;

    var priorityDiv = document.getElementById(`priority${priority}`);
    priorityDiv.appendChild(newDiv);

    newDiv.addEventListener("dragstart", handleDragStart);
    newDiv.addEventListener("dblclick", function (e) {
        changeToInput(e.target);
    });

    let html = `<div id="modal3" class="modal hidden fixed w-full h-100 inset-0 z-50 overflow-hidden justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
    <div class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded-lg shadow-lg z-50 overflow-y-auto">
      <div class="modal-content py-4 text-left px-6">
        <!--Title-->
        <div class="flex justify-between items-center pb-3">
          <p class="text-2xl font-bold">Step Info</p>
          <div onclick="modalClose(3)" class="modal-close cursor-pointer z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
              </path>
            </svg>
          </div>
        </div>
        <!--Body-->
        <div class="my-5">
          <p>new step</p>
        </div>
        <!--Footer-->
        <div class="flex justify-end pt-2">
          <button onclick="modalClose(3)" class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Cancel</button>
          <button class="focus:outline-none px-4 bg-teal-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400">Confirm</button>
        </div>
      </div>
    </div>
    </div>`;

    document.getElementById("test").innerHTML = html;
}

//////////////////////////////////////////////////////////////////////

// // Select the node you want to observe
// document.body.addEventListener("click", function (e) {
//     const targetNode = this;

//     // Options for the observer (which mutations to observe)
//     const config = { attributes: true, childList: true, subtree: true };

//     // Callback function to execute when mutations are observed
//     const callback = function (mutationsList, observer) {
//         for (const mutation of mutationsList) {
//             if (
//                 mutation.type === "childList" ||
//                 mutation.type === "attributes" ||
//                 mutation.type === "subtree"
//             ) {
//                 document.getElementById("saveButton").style.display =
//                     "inline-flex";
//             }
//         }
//     };

//     // Create a new observer instance linked to the callback function
//     const observer = new MutationObserver(callback);

//     // Start observing the target node for configured mutations
//     observer.observe(targetNode, config);
// });

// function save() {
//     var mainForm = document.getElementById("form");
//     var steps = document.getElementsByClassName("step");

//     mainForm.addEventListener("submit", function (e) {
//         e.preventDefault();

//         for (var i = 0; i < steps.length; i++) {
//             changeToInput(steps[i]);
//         }

//         this.submit();
//     });
// }

////////////////////////////////////////////////////////////

// window.addEventListener("beforeunload", function (e) {
//     var saveButton = document.getElementById("saveButton");
//     if (saveButton.style.display == "inline-flex") {
//         e.preventDefault();
//     }
// });
