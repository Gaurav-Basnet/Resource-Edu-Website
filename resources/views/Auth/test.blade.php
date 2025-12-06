    @extends('Auth.layout')
    @section('title', 'Language Proficiency Mock Test')
    @section('content')
        <div class="container mx-auto px-4 py-8 max-w-4xl">
            <!-- Test Instructions -->
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6" id="instructions-container">
                <h2 class="text-xl font-bold text-blue-800 mb-3">Test Instructions</h2>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                    <li>This test contains <strong>{{ count($questions) }} multiple-choice questions</strong></li>
                    <li>You have <strong>30 minutes</strong> to complete the test</li>
                    <li>Each question has <strong>4 options</strong> - select the correct one</li>
                    <li>You can navigate between questions using Previous/Next buttons</li>
                    <li>Click "Submit Test" when you've answered all questions</li>
                </ul>
                <button id="start-test" class="mt-4 bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium">
                    Start Test
                </button>
            </div>

            <!-- Quiz Header (Initially Hidden) -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 hidden" id="quiz-header">
                <div>
                    <h1 class="text-2xl md:text-3xl font-bold text-blue-800">Language Proficiency Mock Test</h1>
                    <p class="text-gray-600 text-sm md:text-base">Complete all questions before time runs out</p>
                </div>
                <div class="flex items-center space-x-3 mt-3 md:mt-0">
                    <div class="bg-blue-100 text-blue-800 px-3 py-1 md:px-4 md:py-2 rounded-lg text-center">
                        <span class="block text-xs md:text-sm">Time</span>
                        <span class="font-bold text-base md:text-lg" id="timer">30:00</span>
                    </div>
                    <div class="bg-blue-100 text-blue-800 px-3 py-1 md:px-4 md:py-2 rounded-lg text-center">
                        <span class="block text-xs md:text-sm">Questions</span>
                        <span class="font-bold text-base md:text-lg" id="question-counter">1/{{ count($questions) }}</span>
                    </div>
                </div>
            </div>

            <!-- Quiz Container (Initially Hidden) -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-4 md:p-6 mb-6 hidden" id="quiz-container">
                <div id="question-container">
                    <!-- Questions will be loaded here by JavaScript -->
                </div>
            </div>

            <!-- Navigation & Submit (Initially Hidden) -->
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0 hidden"
                id="quiz-navigation">
                <button id="prev-btn"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-2 rounded-lg text-sm md:text-base font-medium disabled:opacity-50 w-full md:w-auto"
                    disabled>
                    ← Previous
                </button>
                <div class="flex space-x-3 w-full md:w-auto">
                    <button id="next-btn"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg text-sm md:text-base font-medium w-full md:w-auto">
                        Next →
                    </button>
                    <button id="submit-btn"
                        class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg text-sm md:text-base font-medium hidden w-full md:w-auto">
                        Submit Test
                    </button>
                </div>
            </div>

            <!-- Results Modal -->
            <div id="results-modal"
                class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50 px-4">
                <div class="bg-white rounded-xl shadow-xl p-6 w-full max-w-4xl max-h-[90vh] overflow-y-auto">
                    <div class="flex justify-between items-center mb-4 sticky top-0 bg-white py-2">
                        <h2 class="text-xl font-bold text-blue-800">Test Results</h2>
                        <button id="close-modal" class="text-gray-500 hover:text-gray-700">
                            ✕
                        </button>
                    </div>

                    <!-- Thank You Message -->
                    <div class="text-center mb-6 bg-blue-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-blue-800">Thank you for completing the test, <span
                                id="user-name">{{ Auth::user()->name }}</span>!</h3>
                        <p class="text-gray-600 mt-1">Your results are displayed below</p>
                    </div>

                    <div class="text-center mb-6">
                        <div class="text-4xl font-bold text-blue-600 mb-2" id="final-score">0</div>
                        <div class="text-gray-600">Score: <span id="score-display">0</span> out of <span
                                id="total-questions">{{ count($questions) }}</span> questions</div>
                        <div class="text-gray-600 mt-2">Time Taken: <span id="time-taken-display">0:00</span> of 30:00</div>
                    </div>

                    <!-- Answer Preview Section -->
                    <div id="answer-preview" class="space-y-6 mb-6">
                        <!-- Questions with answers will be inserted here -->
                    </div>

                    <div class="flex justify-center sticky bottom-0 bg-white pt-4">
                        <button id="restart-quiz"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium">
                            Take Another Test
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script>
document.addEventListener('DOMContentLoaded', function () {
    // Convert PHP questions to JavaScript format
    const quizData = {!! json_encode($questions->map(function ($question) {
        return [
            'id' => $question->id,
            'question_text' => $question->question_text,
            'options' => [
                'a' => $question->option_a,
                'b' => $question->option_b,
                'c' => $question->option_c,
                'd' => $question->option_d
            ],
            'correct_option' => $question->correct_option
        ];
    })) !!};

                // DOM Elements
                const instructionsContainer = document.getElementById('instructions-container');
                const startTestBtn = document.getElementById('start-test');
                const quizHeader = document.getElementById('quiz-header');
                const quizContainer = document.getElementById('quiz-container');
                const quizNavigation = document.getElementById('quiz-navigation');
                const questionContainer = document.getElementById('question-container');
                const nextBtn = document.getElementById('next-btn');
                const prevBtn = document.getElementById('prev-btn');
                const submitBtn = document.getElementById('submit-btn');
                const timerEl = document.getElementById('timer');
                const questionCounter = document.getElementById('question-counter');
                const resultsModal = document.getElementById('results-modal');
                const finalScoreEl = document.getElementById('final-score');
                const scoreDisplay = document.getElementById('score-display');
                const totalQuestionsEl = document.getElementById('total-questions');
                const timeTakenDisplay = document.getElementById('time-taken-display');
                const closeModalBtn = document.getElementById('close-modal');
                const restartQuizBtn = document.getElementById('restart-quiz');
                const answerPreview = document.getElementById('answer-preview');
                const userName = document.getElementById('user-name');

                // Quiz State
                let currentQuestionIndex = 0;
                let userAnswers = Array(quizData.length).fill(null);
                let score = 0;
                let quizTimer;
                let timeRemaining = 30 * 60;
                let startTime;
                let endTime;

                // Start Test Button
                startTestBtn.addEventListener('click', () => {
                    instructionsContainer.classList.add('hidden');
                    quizHeader.classList.remove('hidden');
                    quizContainer.classList.remove('hidden');
                    quizNavigation.classList.remove('hidden');
                    initQuiz();
                });

                // Initialize Quiz
                function initQuiz() {
                    startTime = new Date();
                    renderQuestion();
                    startTimer();
                    updateQuestionCounter();
                }

                // Render Current Question (Fixed version)
                function renderQuestion() {
                    const question = quizData[currentQuestionIndex];

                    questionContainer.innerHTML = `
                    <div class="mb-6">
                        <h2 class="text-lg md:text-xl font-semibold mb-4">Question ${currentQuestionIndex + 1}</h2>
                        <p class="text-base md:text-lg font-medium mb-6">${question.question_text}</p>

                        <div class="space-y-3">
                            ${Object.entries(question.options).map(([option, text]) => `
                                <div class="flex items-center">
                                    <input type="radio" id="q${question.id}_${option}" 
                                        name="q${question.id}" 
                                        value="${option}"
                                        ${userAnswers[currentQuestionIndex] === option ? 'checked' : ''}
                                        class="mr-3 h-4 w-4 md:h-5 md:w-5">
                                    <label for="q${question.id}_${option}" class="cursor-pointer text-sm md:text-base">
                                        ${text}
                                    </label>
                                </div>
                            `).join('')}
                        </div>
                    </div>
                `;

                    // Update navigation buttons
                    prevBtn.disabled = currentQuestionIndex === 0;

                    if (currentQuestionIndex === quizData.length - 1) {
                        nextBtn.classList.add('hidden');
                        submitBtn.classList.remove('hidden');
                    } else {
                        nextBtn.classList.remove('hidden');
                        submitBtn.classList.add('hidden');
                    }
                }

                // Timer Functions
                function startTimer() {
                    updateTimerDisplay();
                    quizTimer = setInterval(() => {
                        timeRemaining--;
                        updateTimerDisplay();

                        if (timeRemaining <= 0) {
                            clearInterval(quizTimer);
                            endQuiz();
                        }
                    }, 1000);
                }

                function updateTimerDisplay() {
                    const minutes = Math.floor(timeRemaining / 60);
                    const seconds = timeRemaining % 60;
                    timerEl.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

                    if (timeRemaining <= 5 * 60) {
                        timerEl.parentElement.classList.remove('bg-blue-100', 'text-blue-800');
                        timerEl.parentElement.classList.add('bg-red-100', 'text-red-800');
                    }
                }

                // Question Counter
                function updateQuestionCounter() {
                    questionCounter.textContent = `${currentQuestionIndex + 1}/${quizData.length}`;
                }

                // Navigation
                nextBtn.addEventListener('click', () => {
                    saveAnswer();
                    if (currentQuestionIndex < quizData.length - 1) {
                        currentQuestionIndex++;
                        renderQuestion();
                        updateQuestionCounter();
                    }
                });

                prevBtn.addEventListener('click', () => {
                    if (currentQuestionIndex > 0) {
                        currentQuestionIndex--;
                        renderQuestion();
                        updateQuestionCounter();
                    }
                });

                // Save User Answer
                function saveAnswer() {
                    const question = quizData[currentQuestionIndex];
                    const selectedOption = document.querySelector(`input[name="q${question.id}"]:checked`);
                    userAnswers[currentQuestionIndex] = selectedOption ? selectedOption.value : null;
                }

                // Submit Quiz
                submitBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    saveAnswer();
                    endQuiz();
                });

                // End Quiz and Show Results
                function endQuiz() {
                    clearInterval(quizTimer);
                    endTime = new Date();
                    calculateScore();
                    showResults();
                    renderAnswerPreview();
                }

                // Calculate Score
                function calculateScore() {
                    score = 0;
                    quizData.forEach((question, index) => {
                        if (userAnswers[index] === question.correct_option) {
                            score++;
                        }
                    });
                }

                // Render Answer Preview (Fixed version)
                function renderAnswerPreview() {
                    answerPreview.innerHTML = '';

                    quizData.forEach((question, index) => {
                        const userAnswer = userAnswers[index];
                        const isCorrect = userAnswer === question.correct_option;

                        answerPreview.innerHTML += `
                        <div class="border rounded-lg p-4 ${isCorrect ? 'bg-green-50 border-green-200' : 'bg-red-50 border-red-200'}">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="font-semibold">Question ${index + 1}</h3>
                                <span class="text-sm ${isCorrect ? 'text-green-600' : 'text-red-600'}">
                                    ${isCorrect ? '✓ Correct' : '✗ Incorrect'}
                                </span>
                            </div>
                            <p class="font-medium mb-3">${question.question_text}</p>

                            <div class="space-y-2">
                                ${Object.entries(question.options).map(([option, text]) => {
                            let optionClass = '';
                            if (option === question.correct_option) {
                                optionClass = 'text-green-600 font-semibold';
                            } else if (option === userAnswer && !isCorrect) {
                                optionClass = 'text-red-600 line-through';
                            }

                            return `
                                        <div class="flex items-center">
                                            <span class="mr-2 w-5 text-center">${option.toUpperCase()}.</span>
                                            <span class="${optionClass}">${text}</span>
                                            ${option === question.correct_option ? '<span class="ml-2 text-green-600">✓</span>' : ''}
                                        </div>
                                    `;
                        }).join('')}
                            </div>

                            ${!isCorrect ? `
                                <div class="mt-3 text-sm text-gray-600">
                                    <span class="font-medium">Your answer:</span> 
                                    ${userAnswer ? userAnswer.toUpperCase() : 'Not answered'}
                                </div>
                                <div class="mt-1 text-sm text-gray-600">
                                    <span class="font-medium">Correct answer:</span> 
                                    ${question.correct_option.toUpperCase()}
                                </div>
                            ` : ''}
                        </div>
                    `;
                    });
                }

                // Show Results Modal
                function showResults() {
                    const timeTaken = Math.floor((endTime - startTime) / 1000);
                    const minutes = Math.floor(timeTaken / 60);
                    const seconds = timeTaken % 60;

                    finalScoreEl.textContent = score;
                    scoreDisplay.textContent = score;
                    totalQuestionsEl.textContent = quizData.length;
                    timeTakenDisplay.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

                    resultsModal.classList.remove('hidden');
                }

                // Close Modal
                closeModalBtn.addEventListener('click', () => {
                    resultsModal.classList.add('hidden');
                });

                // Restart Quiz
                restartQuizBtn.addEventListener('click', () => {
                    resultsModal.classList.add('hidden');
                    instructionsContainer.classList.remove('hidden');
                    quizHeader.classList.add('hidden');
                    quizContainer.classList.add('hidden');
                    quizNavigation.classList.add('hidden');

                    // Reset quiz state
                    currentQuestionIndex = 0;
                    userAnswers = Array(quizData.length).fill(null);
                    score = 0;
                    timeRemaining = 30 * 60;

                    // Reset timer display
                    timerEl.parentElement.classList.remove('bg-red-100', 'text-red-800');
                    timerEl.parentElement.classList.add('bg-blue-100', 'text-blue-800');
                    timerEl.textContent = '30:00';
                });

                // Close modal when clicking outside
                resultsModal.addEventListener('click', (e) => {
                    if (e.target === resultsModal) {
                        resultsModal.classList.add('hidden');
                    }
                });
            });
        </script>
    @endsection