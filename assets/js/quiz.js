function Quiz() {
  this.error = null;
  this.answerCount = 0;
}

Quiz.prototype.getDomElement = function (element) {
  const elem = document.getElementById(element);
  return elem;
};

Quiz.prototype.showErrorMessage = function (element, errorElement) {
  const errorSpan = quiz.getDomElement(errorElement);

  if (errorSpan.id !== 'type-error') {
    if (!element.value.trim().length) {
      this.error = 'error';
      errorSpan.textContent = 'This field is required';
    }
  }

  if (errorSpan.id === 'type-error') {
    if (element.value === 'none') {
      this.error = 'error';
      errorSpan.textContent = 'This field is required';
    }
  }

}

Quiz.prototype.HideErrorMessage = function (errorElement) {
  this.error = null;
  const errorSpan = quiz.getDomElement(errorElement);
  errorSpan.textContent = '';
}

Quiz.prototype.onClickAddQuestion = function () {
  let button = quiz.getDomElement('add-question');

  button.addEventListener('click', function () {
    // call function
    quiz.validateTitle();

    // Show question type 
    if (quiz.error === null) {
      quiz.hideElement('add-question');
      quiz.showQuestionType();
    }

  })
}

Quiz.prototype.onClickAddAnswer = function () {
  let button = quiz.getDomElement('add-answer');

  button.addEventListener('click', function () {
    // call function
    quiz.validateQuestion();

    if (quiz.error === null) {
      quiz.renderAnswerField();

      // show done buttone
      if (quiz.answerCount >= 2) {
        quiz.showElement('done');
      }
    }

  })
}

Quiz.prototype.onClickDoneButton = function () {
  let button = quiz.getDomElement('done');

  button.addEventListener('click', function () {

    if (quiz.error === null) {
      quiz.answerCount = 0;

      quiz.hideElement('buttons-container');
      quiz.showElement('submitButton')
    }
  })
}

Quiz.prototype.showQuestionType = function () {
  const element = quiz.getDomElement('questionType');
  element.classList.remove('d-none');
}

Quiz.prototype.renderAnswerField = function () {

  this.answerCount = this.answerCount + 1;

  const div = document.createElement('div');
  div.className = "form-group";

  div.innerHTML = `
  <label for="question-answer-${this.answerCount}">Answer ${this.answerCount}</label>
    <input type="text" name="question-answer-${this.answerCount}" id="question-answer-${this.answerCount}" class="form-control form-control-lg"
     placeholder="Enter Answer" required>
  `;

  const domElement = quiz.getDomElement('question');
  domElement.appendChild(div);
}

Quiz.prototype.validateTitle = function () {
  let title = quiz.getDomElement('quiz-title');

  if (title.value) {
    quiz.HideErrorMessage('title-error');
  } else {
    quiz.showErrorMessage(title, 'title-error');
  }

  // Render error message to dom
  quiz.showErrorMessage(title, 'title-error');

}

Quiz.prototype.validateQuestion = function () {
  let question = quiz.getDomElement('quiz-question');

  if (question.value) {
    quiz.HideErrorMessage('question-error');
  } else {
    quiz.showErrorMessage(question, 'question-error');
  }
}


Quiz.prototype.showOrHideQuestion = function () {
  quiz.getDomElement('type')
    .addEventListener('change', function () {
      const element = quiz.getDomElement('type');
      const question = quiz.getDomElement('question');

      if (element.value !== 'none') {
        question.classList.remove('d-none');

        quiz.HideErrorMessage('type-error');
        quiz.showElement('add-answer');
      } else {
        const question = quiz.getDomElement('question');
        question.classList.add('d-none');

        quiz.hideElement('add-answer');

        // Render error message to dom
        quiz.showErrorMessage(type, 'type-error');
      }
    })
}

/*  
  Toggle button functions
  */
Quiz.prototype.hideElement = function (element) {
  const elem = quiz.getDomElement(element);
  elem.classList.add('d-none');
}

Quiz.prototype.showElement = function (element) {
  const elem = quiz.getDomElement(element);
  elem.classList.remove('d-none');
}


const quiz = new Quiz();

quiz.onClickAddQuestion();
quiz.showOrHideQuestion();
quiz.onClickAddAnswer();
quiz.onClickDoneButton();
