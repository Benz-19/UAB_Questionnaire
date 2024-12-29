<?php

require_once __DIR__ .  "/../includes/cssFile.inc.php";
require_once __DIR__ .  "/../includes/autoloader.inc.php";

session_start();
if (isset($_SESSION["logged-in"]) !== true && isset($_SESSION["logout"]) === true) {

    echo
    '<script>
       window.history.forward();
   </script>';

    header("Location: ../../public/index.php");
} else {
    echo
    '<script>
        window.history.forward();
    </script>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="../../images/logo.ds.png" href="favicon.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php getCSS("index") ?>">
    <link rel="stylesheet" href="<?php getCSS("form") ?>">

    <style>
        .yr-std {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: start;
        }

        form .yr-std label:nth-child(1) {
            width: 100%;
        }

        @media screen and (max-width:325px) {
            .step-buttons {
                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
            }
        }
    </style>

    <title>Chestionar Absolvenți</title>

</head>

<body>

    <header>
        <div class="idx-logo">
            <img src="../../public/images/logo.ds.png" alt="uni-logo" class="logo">
        </div>
        <div class="idx-header-det">
            <h3>Absolvenții și piața muncii</h3>
            <p>Chestionar de monitorizare a inserției pe piața muncii a absolvenților, Universitatea “1 Decembrie 1918”
                din Alba Iulia</p>
        </div>

        <form action="../validate/studentLogout.validate.php" method="POST">
            <div>
                <button type="submit" name="logout" class="btn btn-danger ms-3">Logout</button>
            </div>
        </form>

    </header>

    <div class="form-container mt-5">
        <nav>
            <ul class="nav nav-pills justify-content-center mb-4">
                <li class="nav-item">
                    <button class="nav-link active" id="general-info-tab">Informații
                        Generale</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="evaluation-tab">Evaluare</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="career-info-tab" o>Informații Carieră</button>
                </li>
            </ul>
        </nav>

        <!-- Section 1: Informații Generale -->
        <div id="section-1" class="form-section active">

            <h5 class="mt-5"><br>Informații Generale</h5>
            <div class="mb-3"><br>
                <label for="institution" class="form-label text-primary">Instituția</label>
                <input type="text" name="" class="form-control" id="institution" readonly
                    value="Universitatea “1 Decembrie 1918” din Alba Iulia" placeholder="Universitatea “1 Decembrie 1918” din Alba Iulia">
            </div>
            <form action="userResponse.php" method="POST">

                <div class="mb-3">
                    <div class="mb-3">
                        <label for="faculty" class="form-label text-primary">Facultatea</label>
                        <div class="shadow-container">
                            <select id="faculty" name="faculty" class="form-select">
                                <option value="" disabled selected>Selectați facultatea</option>
                                <option value="Facultatea de Istorie, Litere și Științe ale Educației">Facultatea de Istorie, Litere și Științe ale Educației</option>
                                <option value="Facultatea de Drept și Științe Sociale">Facultatea de Drept și Științe Sociale</option>
                                <option value="Facultatea de Științe Economice">Facultatea de Științe Economice</option>
                                <option value="Facultatea de Informatică și Inginerie">Facultatea de Informatică și Inginerie</option>
                                <option value="Facultatea de Teologie Ortodoxă">Facultatea de Teologie Ortodoxă</option>
                                <option value="Facultatea de Științe">Facultatea de Științe</option>
                                <option value="Facultatea de Științe Umaniste">Facultatea de Științe Umaniste</option>
                                <option value="Colegiul universitar Economic și de Muzeologie din Alba Iulia">Colegiul universitar Economic și de Muzeologie din Alba Iulia</option>
                                <option value="Colegiul universitar din Alba Iulia">Colegiul universitar din Alba Iulia</option>
                                <option value="Colegiul Universitar de Instituțori din Blaj">Colegiul Universitar de Instituțori din Blaj</option>
                            </select>
                        </div>
                        <div class="invalid-feedback">Vă rugăm să selectați facultatea.</div>
                    </div>
                    <div class="mb-3">
                        <label for="studyProgram" class="form-label text-primary">Programul de studii</label>
                        <div class="shadow-container">
                            <select id="studyProgram" name="program" class="form-select">
                                <option value="" disabled selected>Selectați tipul de studii</option>
                                <option value="Arheologie (ZI)">Arheologie (ZI)</option>
                                <option value="Arheologie (în limba engleză) (ZI)">Arheologie (în limba engleză) (ZI)
                                </option>
                                <option value="Arhivistică (ZI)">Arhivistică (ZI)</option>
                                <option value="Arhivistică și muzeologie (ZI)">Arhivistică și muzeologie (ZI)</option>
                                <option value="Conservarea și restaurarea patrimoniului (ZI)">Conservarea și restaurarea
                                    patrimoniului (ZI)</option>
                                <option value="Istorie (ZI)">Istorie (ZI)</option>
                                <option value="Istorie - Arheologie (ZI)">Istorie - Arheologie (ZI)</option>
                                <option value="Istorie - Limba și literatura engleză (ZI)">Istorie - Limba și literatura
                                    engleză
                                    (ZI)</option>
                                <option value="Limba și literatura engleză (ZI)">Limba și literatura engleză (ZI)</option>
                                <option value="Limba și literatura franceză (ZI)">Limba și literatura franceză (ZI)</option>
                                <option value="Limba și literatura română - Limba și literatura franceză (ZI)">Limba și
                                    literatura
                                    română - Limba și literatura franceză (ZI)</option>
                                <option value="Limba și literatura română - Limba și literatura franceză (ID)">Limba și
                                    literatura
                                    română - Limba și literatura franceză (ID)</option>
                                <option value="Limba și literatura română - Limba și literatura engleză (ZI)">Limba și
                                    literatura
                                    română - Limba și literatura engleză (ZI)</option>
                                <option value="Limba și literatura franceză - Limba și literatura engleză (ID)">Limba și
                                    literatura
                                    franceză - Limba și literatura engleză (ID)</option>
                                <option value="Muzeologie (ZI)">Muzeologie (ZI)</option>
                                <option value="Traducere și interpretare (ZI)">Traducere și interpretare (ZI)</option>
                                <option value="Arheologie pre- și protoistorică (ZI - 3 semestre)">Arheologie pre- și
                                    protoistorică
                                    (ZI - 3 semestre)</option>
                                <option value="Arheologie sistemică (ZI - 2 ani)">Arheologie sistemică (ZI - 2 ani)</option>
                                <option value="Confluențe literare și culturale româno-franceze (ZI - 2 ani)">Confluențe
                                    literare și
                                    culturale româno-franceze (ZI - 2 ani)</option>
                                <option
                                    value="Cultură, politică și societate în Transilvania secolelor XVII-XIX (ZI - 3 semestre)">
                                    Cultură, politică și societate în Transilvania secolelor XVII-XIX (ZI - 3 semestre)
                                </option>
                                <option value="Identități regionale în Europa centrală - răsăriteană (ZI - 2 ani)">
                                    Identități
                                    regionale în Europa centrală - răsăriteană (ZI - 2 ani)</option>
                                <option
                                    value="Interferențe culturale și literare româno-britanice și româno-americane (ZI - 2 ani)">
                                    Interferențe culturale și literare româno-britanice și româno-americane (ZI - 2 ani)
                                </option>
                                <option value="Limba, literatura și cultura engleză în context european (ZI - 2 ani)">Limba,
                                    literatura și cultura engleză în context european (ZI - 2 ani)</option>
                                <option value="Limba, literatura și cultura franceză în spațiul francofon (ZI - 2 ani)">
                                    Limba,
                                    literatura și cultura franceză în spațiul francofon (ZI - 2 ani)</option>
                                <option
                                    value="Limbă și comunicare în administrarea afacerilor (în limba engleză) (ZI - 2 ani)">
                                    Limbă și comunicare în administrarea afacerilor (în limba engleză) (ZI - 2 ani)</option>
                                <option value="Literatură și cultură românească în context european (ZI - 1 an)">Literatură
                                    și
                                    cultură românească în context european (ZI - 1 an)</option>
                                <option value="Literatură și cultură românească în context european (ZI - 2 ani)">Literatură
                                    și
                                    cultură românească în context european (ZI - 2 ani)</option>
                                <option value="Muzeologie. Cercetarea și protejarea patrimoniului cultural (ZI - 2 ani)">
                                    Muzeologie.
                                    Cercetarea și protejarea patrimoniului cultural (ZI - 2 ani)</option>
                                <option
                                    value="Preistoria spațiului carpato-dunărean în contextul arheologiei sistemice (ZI - 2 ani)">
                                    Preistoria spațiului carpato-dunărean în contextul arheologiei sistemice (ZI - 2 ani)
                                </option>
                                <option value="Recepterea culturii și civilizației franceze în România (ZI - 2 ani)">
                                    Recepterea
                                    culturii și civilizației franceze în România (ZI - 2 ani)</option>
                                <option
                                    value="Recepterea culturii și civilizației franceze în România în secolele XVIII-XX (ZI - 2 ani)">
                                    Recepterea culturii și civilizației franceze în România în secolele XVIII-XX (ZI - 2
                                    ani)
                                </option>
                                <option value="Studii muzeale și turism cultural (ZI - 2 ani)">Studii muzeale și turism
                                    cultural
                                    (ZI
                                    - 2 ani)</option>
                                <option value="Topografie și cadastru arheologic (ZI - 3 semestre)">Topografie și cadastru
                                    arheologic (ZI - 3 semestre)</option>
                                <option value="Transilvania în istoria culturală a Europei Centrale (ZI - 2 ani)">
                                    Transilvania
                                    în
                                    istoria culturală a Europei Centrale (ZI - 2 ani)</option>
                                <option value="Școala Doctorală - Istorie">Școala Doctorală - Istorie</option>
                                <option value="Școala Doctorală - Filologie">Școala Doctorală - Filologie</option>
                            </select>
                        </div>
                        <div class="invalid-feedback">Vă rugăm să selectați programul de studii.</div>
                    </div>

                    <div class="mb-3"><br>
                        <label class="form-label text-primary">Tipul de studii</label>
                        <div class="d-flex justify-content-between align-items-center shadow-container">
                            <div id="wrap-wrap">
                                <div class="form-check me-3 position-relative">
                                    <input class="form-check-input" type="radio" name="studyType" id="licenta" value="Licență">
                                    <label class="form-check-label" for="licenta">Licență</label>
                                    <span class="custom-tooltip">Aceasta este pentru studii de licență.</span>
                                </div>
                                <div class="form-check me-3 position-relative">
                                    <input class="form-check-input" type="radio" name="studyType" id="master" value="Master">
                                    <label class="form-check-label" for="master">Master</label>
                                    <span class="custom-tooltip">Aceasta este pentru studii de master.</span>
                                </div>
                                <div class="form-check me-3 position-relative">
                                    <input class="form-check-input" type="radio" name="studyType" id="doctorat" value="Doctorat">
                                    <label class="form-check-label" for="doctorat">Doctorat</label>
                                    <span class="custom-tooltip">Aceasta este pentru studii de doctorat.</span>
                                </div>
                                <div class="form-check me-3 position-relative">
                                    <input class="form-check-input" type="radio" name="studyType" id="postdoctorat" value="Postdoctorat">
                                    <label class="form-check-label" for="postdoctorat">Postdoctorat</label>
                                    <span class="custom-tooltip">Aceasta este pentru studii postdoctorale.</span>
                                </div>
                                <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('studyType')">Reset</button>
                            </div>
                        </div>
                    </div>

                    <div class="yr-std">
                        <label class="form-label text-primary">Vă rugăm să specificaţi perioada în care ați studiat</label>
                        <div class="mb-3">
                            <div class="shadow-container">
                                <label for="yearOfStudyStart" class="form-label text-primary">An început</label>
                                <input type="date" class="form-control w-auto" id="yearOfStudyStart" name="yearOfStudyStart">
                                <div class="invalid-feedback">Vă rugăm să introduceți data nașterii.</div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="shadow-container">
                                <label for="yearOfStudyEnd" class="form-label text-primary">An sfârșit</label>
                                <input type="date" class="form-control w-auto" id="yearOfStudyEnd" name="yearOfStudyEnd">
                                <div class="invalid-feedback">Vă rugăm să introduceți data nașterii.</div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 mt-5">
                        <label for="dob" class="form-label text-primary">Data nașterii</label>
                        <div class="shadow-container">
                            <input type="date" class="form-control" id="dob" name="dob">
                            <div class="invalid-feedback">Vă rugăm să introduceți data nașterii.</div>
                        </div>
                    </div>
                </div>


                <div class="step-buttons">
                    <button type="button" class="btn btn-primary" onclick="nextSection()">Pasul Următor</button>
                </div>
        </div>

        <!-- Section 2: Evaluare -->
        <div id="section-2" class="form-section">
            <div class="step-buttons">
                <button type="button" class="btn btn-secondary" onclick="prevSection()">Pasul Anterior</button>
                <button type="button" class="btn btn-primary" onclick="nextSection()">Pasul Următor</button>
            </div>
            <h5 class="mt-5"><br>Evaluare</h5>

            <!-- Question 1 -->
            <h5 class="mt-5"><br>Cum evaluaţi următoarele opţiuni şi condiţii de studiu din cadrul programului de studii de referință?</h5>
            <div class="mb-3"><br>
                <label class="form-label  text-primary">Organizarea şi structura programului de studii</label>
                <div class="d-flex justify-content-between align-items-center shadow-container">
                    <div id="wrap-wrap">
                        <div class="form-check me-3 position-relative">
                            <input class="form-check-input" type="radio" name="q1" id="q1_1" value="1">
                            <label class="form-check-label" for="q1_1">Foarte slab</label>
                            <span class="custom-tooltip">Aceasta înseamnă o calitate foarte slabă.</span>
                        </div>
                        <div class="form-check me-3 position-relative">
                            <input class="form-check-input" type="radio" name="q1" id="q1_2" value="2">
                            <label class="form-check-label" for="q1_2">Slab</label>
                            <span class="custom-tooltip">Aceasta înseamnă o calitate slabă.</span>
                        </div>
                        <div class="form-check me-3 position-relative">
                            <input class="form-check-input" type="radio" name="q1" id="q1_3" value="3">
                            <label class="form-check-label" for="q1_3">Bun</label>
                            <span class="custom-tooltip">Aceasta înseamnă o calitate bună.</span>
                        </div>
                        <div class="form-check me-3 position-relative">
                            <input class="form-check-input" type="radio" name="q1" id="q1_4" value="4">
                            <label class="form-check-label" for="q1_4">Foarte bun</label>
                            <span class="custom-tooltip">Aceasta înseamnă o calitate foarte bună.</span>
                        </div>
                        <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q1')">Reset</button>
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Posibilitatea studenţilor de a-şi configura singuri programul de studii</label>
                <div class="d-flex justify-content-between align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q2" id="q2_1" value="1">
                                <label class="form-check-label" for="q2_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă resurse foarte slabe.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q2" id="q2_2" value="2">
                                <label class="form-check-label" for="q2_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă resurse slabe.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q2" id="q2_3" value="3">
                                <label class="form-check-label" for="q2_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă resurse bune.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q2" id="q2_4" value="4">
                                <label class="form-check-label" for="q2_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă resurse foarte bune.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q2')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Posibilitatea de a interacţiona cu personalul didactic în afara orelor de curs</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q3" id="q3_1" value="1">
                                <label class="form-check-label" for="q3_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă sprijin foarte slab.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q3" id="q3_2" value="2">
                                <label class="form-check-label" for="q3_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă sprijin slab.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q3" id="q3_3" value="3">
                                <label class="form-check-label" for="q3_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă sprijin bun.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q3" id="q3_4" value="4">
                                <label class="form-check-label" for="q3_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă sprijin foarte bun.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q3')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Interacţiunea cu ceilalţi studenţi/colegi</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q4" id="q4_1" value="1">
                                <label class="form-check-label" for="q4_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q4" id="q4_2" value="2">
                                <label class="form-check-label" for="q4_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q4" id="q4_3" value="3">
                                <label class="form-check-label" for="q4_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q4" id="q4_4" value="4">
                                <label class="form-check-label" for="q4_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q4')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Sistemul evaluare la examene</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q5" id="q5_1" value="1">
                                <label class="form-check-label" for="q5_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q5" id="q5_2" value="2">
                                <label class="form-check-label" for="q5_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q5" id="q5_3" value="3">
                                <label class="form-check-label" for="q5_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q5" id="q5_4" value="4">
                                <label class="form-check-label" for="q5_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q5')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 6 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Posibilitatea studenţilor de a influenţa politica şi deciziile strategice ale universităţii</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q6" id="q6_1" value="1">
                                <label class="form-check-label" for="q6_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q6" id="q6_2" value="2">
                                <label class="form-check-label" for="q6_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q6" id="q6_3" value="3">
                                <label class="form-check-label" for="q6_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q6" id="q6_4" value="4">
                                <label class="form-check-label" for="q6_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q6')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 7 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Îndrumarea oferită de personalul didactic – în vederea pregătirii examenelor în general / examenului de licenţă în particular</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q7" id="q7_1" value="1">
                                <label class="form-check-label" for="q7_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q7" id="q7_2" value="2">
                                <label class="form-check-label" for="q7_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q7" id="q7_3" value="3">
                                <label class="form-check-label" for="q7_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q7" id="q7_4" value="4">
                                <label class="form-check-label" for="q7_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q7')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 8 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Îndrumarea oferită de personalul didactic – în general</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q8" id="q8_1" value="1">
                                <label class="form-check-label" for="q8_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q8" id="q8_2" value="2">
                                <label class="form-check-label" for="q8_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q8" id="q8_3" value="3">
                                <label class="form-check-label" for="q8_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q8" id="q8_4" value="4">
                                <label class="form-check-label" for="q8_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q8')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 9 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Furnizarea de materiale didactice</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q9" id="q9_1" value="1">
                                <label class="form-check-label" for="q9_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q9" id="q9_2" value="2">
                                <label class="form-check-label" for="q9_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q9" id="q9_3" value="3">
                                <label class="form-check-label" for="q9_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q9" id="q9_4" value="4">
                                <label class="form-check-label" for="q9_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q9')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 10 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Dotarea (din punct de vedere cantitativ) cu echipamente şi instrumente pentru practică / ateliere / ore specialitate / laboratoare / seminarii</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q10" id="q10_1" value="1">
                                <label class="form-check-label" for="q10_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q10" id="q10_2" value="2">
                                <label class="form-check-label" for="q10_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q10" id="q10_3" value="3">
                                <label class="form-check-label" for="q10_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q10" id="q10_4" value="4">
                                <label class="form-check-label" for="q10_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q10')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 11 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Calitatea predării – didactică</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q11" id="q11_1" value="1">
                                <label class="form-check-label" for="q11_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q11" id="q11_2" value="2">
                                <label class="form-check-label" for="q11_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q11" id="q11_3" value="3">
                                <label class="form-check-label" for="q11_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q11" id="q11_4" value="4">
                                <label class="form-check-label" for="q11_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q11')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 12 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Calitatea predării – utilizarea următoarelor metode de predare - învăţare: prelegeri, demonstrații, participare la proiecte de cercetare,
                    stagii și plasamente de practică, conversaţie profesori – studenţi în timpul cursului/seminarului,
                    dezbateri între studenţi în timpul cursului/seminarului, exerciţii şi aplicaţii practice în timpul cursului/seminarului,
                    învăţarea prin proiecte (alte proiecte decât cele de cercetare) individuale sau de grup, prezentări orale ale studenţilor</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q12" id="q12_1" value="1">
                                <label class="form-check-label" for="q12_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q12" id="q12_2" value="2">
                                <label class="form-check-label" for="q12_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q12" id="q12_3" value="3">
                                <label class="form-check-label" for="q12_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q12" id="q12_4" value="4">
                                <label class="form-check-label" for="q12_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q12')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 13 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Facilităţi de cazare (cămine) în campusul universitar</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q13" id="q13_1" value="1">
                                <label class="form-check-label" for="q13_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q13" id="q13_2" value="2">
                                <label class="form-check-label" for="q13_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q13" id="q13_3" value="3">
                                <label class="form-check-label" for="q13_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q13" id="q13_4" value="4">
                                <label class="form-check-label" for="q13_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q13')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 14 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Facilităţi de servire a mesei (cantina) în campusul universitar</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q14" id="q14_1" value="1">
                                <label class="form-check-label" for="q14_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q14" id="q14_2" value="2">
                                <label class="form-check-label" for="q14_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q14" id="q14_3" value="3">
                                <label class="form-check-label" for="q14_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q14" id="q14_4" value="4">
                                <label class="form-check-label" for="q14_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q14')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 15 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Starea clădirilor</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q15" id="q15_1" value="1">
                                <label class="form-check-label" for="q15_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q15" id="q15_2" value="2">
                                <label class="form-check-label" for="q15_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q15" id="q15_3" value="3">
                                <label class="form-check-label" for="q15_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q15" id="q15_4" value="4">
                                <label class="form-check-label" for="q15_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q15')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 16 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Calitatea dotării bibliotecilor</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q16" id="q16_1" value="1">
                                <label class="form-check-label" for="q16_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q16" id="q16_2" value="2">
                                <label class="form-check-label" for="q16_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q16" id="q16_3" value="3">
                                <label class="form-check-label" for="q16_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q16" id="q16_4" value="4">
                                <label class="form-check-label" for="q16_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q16')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 17 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Posibilitatea participării la stagii de practică la nivel naţional</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q17" id="q17_1" value="1">
                                <label class="form-check-label" for="q17_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q17" id="q17_2" value="2">
                                <label class="form-check-label" for="q17_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q17" id="q17_3" value="3">
                                <label class="form-check-label" for="q17_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q17" id="q17_4" value="4">
                                <label class="form-check-label" for="q17_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q17')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 18 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Posibilitatea participării la stagii de practică la nivel internaţional</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q18" id="q18_1" value="1">
                                <label class="form-check-label" for="q18_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q18" id="q18_2" value="2">
                                <label class="form-check-label" for="q18_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q18" id="q18_3" value="3">
                                <label class="form-check-label" for="q18_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q18" id="q18_4" value="4">
                                <label class="form-check-label" for="q18_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q18')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 19 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Disponibilitatea echipamentelor (accesul la acestea) tehnice (calculatoare, instrumente de măsurare, etc.)</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q19" id="q19_1" value="1">
                                <label class="form-check-label" for="q19_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q19" id="q19_2" value="2">
                                <label class="form-check-label" for="q19_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q19" id="q19_3" value="3">
                                <label class="form-check-label" for="q19_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q19" id="q19_4" value="4">
                                <label class="form-check-label" for="q19_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q19')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 20 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Accent pe componenta de cercetare a procesului de predare - învăţare</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q20" id="q20_1" value="1">
                                <label class="form-check-label" for="q20_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q20" id="q20_2" value="2">
                                <label class="form-check-label" for="q20_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q20" id="q20_3" value="3">
                                <label class="form-check-label" for="q20_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q20" id="q20_4" value="4">
                                <label class="form-check-label" for="q20_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q20')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 21 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Calitatea echipamentelor şi instrumentelor pentru practica de laborator / seminar</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q21" id="q21_1" value="1">
                                <label class="form-check-label" for="q21_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q21" id="q21_2" value="2">
                                <label class="form-check-label" for="q21_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q21" id="q21_3" value="3">
                                <label class="form-check-label" for="q21_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q21" id="q21_4" value="4">
                                <label class="form-check-label" for="q21_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q21')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SUB SECTION -->
            <h5 class="mt-5"><br>Cum evaluaţi nivelul propriu de competenţe la momentul absolvirii programului de studii?</h5>
            <!-- Question 22 -->
            <div class="mb-3"><br>
                <label class="form-label  text-primary">Cunoaşterea aprofundată a propriului domeniu de studiu / a propriei specializări</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q22" id="q22_1" value="1">
                                <label class="form-check-label" for="q22_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q22" id="q22_2" value="2">
                                <label class="form-check-label" for="q22_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q22" id="q22_3" value="3">
                                <label class="form-check-label" for="q22_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q22" id="q22_4" value="4">
                                <label class="form-check-label" for="q22_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q22')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 23 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Cunoaşterea altor domenii sau discipline</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q23" id="q23_1" value="1">
                                <label class="form-check-label" for="q23_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q23" id="q23_2" value="2">
                                <label class="form-check-label" for="q23_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q23" id="q23_3" value="3">
                                <label class="form-check-label" for="q23_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q23" id="q23_4" value="4">
                                <label class="form-check-label" for="q23_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q23')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 24 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Gândirea analitică</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q24" id="q24_1" value="1">
                                <label class="form-check-label" for="q24_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q24" id="q24_2" value="2">
                                <label class="form-check-label" for="q24_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q24" id="q24_3" value="3">
                                <label class="form-check-label" for="q24_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q24" id="q24_4" value="4">
                                <label class="form-check-label" for="q24_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q24')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 25 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Abilitatea de a acumula rapid noi cunoştinţe</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q25" id="q25_1" value="1">
                                <label class="form-check-label" for="q25_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q25" id="q25_2" value="2">
                                <label class="form-check-label" for="q25_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q25" id="q25_3" value="3">
                                <label class="form-check-label" for="q25_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q25" id="q25_4" value="4">
                                <label class="form-check-label" for="q25_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q25')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 26 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Abilitatea de a negocia în mod eficace</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q26" id="q26_1" value="1">
                                <label class="form-check-label" for="q26_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q26" id="q26_2" value="2">
                                <label class="form-check-label" for="q26_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q26" id="q26_3" value="3">
                                <label class="form-check-label" for="q26_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q26" id="q26_4" value="4">
                                <label class="form-check-label" for="q26_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q26')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 27 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Abilitatea de a acţiona bine în condiţii de stres</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q27" id="q27_1" value="1">
                                <label class="form-check-label" for="q27_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q27" id="q27_2" value="2">
                                <label class="form-check-label" for="q27_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q27" id="q27_3" value="3">
                                <label class="form-check-label" for="q27_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q27" id="q27_4" value="4">
                                <label class="form-check-label" for="q27_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q27')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 28 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Abilitatea de a identifica noi oportunităţi şi a acţiona rapid pentru a le urmări</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q28" id="q28_1" value="1">
                                <label class="form-check-label" for="q28_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q28" id="q28_2" value="2">
                                <label class="form-check-label" for="q28_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q28" id="q28_3" value="3">
                                <label class="form-check-label" for="q28_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q28" id="q28_4" value="4">
                                <label class="form-check-label" for="q28_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q28')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 29 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Abilitatea de a coordona activităţi</label>
                <div class="d-flex justify-content-between  align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q29" id="q29_1" value="1">
                                <label class="form-check-label" for="q29_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q29" id="q29_2" value="2">
                                <label class="form-check-label" for="q29_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q29" id="q29_3" value="3">
                                <label class="form-check-label" for="q29_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q29" id="q29_4" value="4">
                                <label class="form-check-label" for="q29_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q29')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Question 30 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Abilitatea de a gestiona eficient timpul de lucru</label>
                <div class="d-flex justify-content-between align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q30" id="q30_1" value="1">
                                <label class="form-check-label" for="q30_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q30" id="q30_2" value="2">
                                <label class="form-check-label" for="q30_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q30" id="q30_3" value="3">
                                <label class="form-check-label" for="q30_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q30" id="q30_4" value="4">
                                <label class="form-check-label" for="q30_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q30')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 31 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Abilitatea de a lucra în echipă</label>
                <div class="d-flex justify-content-between align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q31" id="q31_1" value="1">
                                <label class="form-check-label" for="q31_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q31" id="q31_2" value="2">
                                <label class="form-check-label" for="q31_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q31" id="q31_3" value="3">
                                <label class="form-check-label" for="q31_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q31" id="q31_4" value="4">
                                <label class="form-check-label" for="q31_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q31')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 32 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Abilitatea de a mobiliza capacităţile altor persoane</label>
                <div class="d-flex justify-content-between align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q32" id="q32_1" value="1">
                                <label class="form-check-label" for="q32_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q32" id="q32_2" value="2">
                                <label class="form-check-label" for="q32_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q32" id="q32_3" value="3">
                                <label class="form-check-label" for="q32_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q32" id="q32_4" value="4">
                                <label class="form-check-label" for="q32_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q32')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 33 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Abilitatea de a-ţi face punctul de vedere înţeles de către ceilalţi</label>
                <div class="d-flex justify-content-between align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q33" id="q33_1" value="1">
                                <label class="form-check-label" for="q33_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q33" id="q33_2" value="2">
                                <label class="form-check-label" for="q33_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q33" id="q33_3" value="3">
                                <label class="form-check-label" for="q33_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q33" id="q33_4" value="4">
                                <label class="form-check-label" for="q33_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q33')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 34 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Abilitatea de exercitare a propriei autorităţi</label>
                <div class="d-flex justify-content-between align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q34" id="q34_1" value="1">
                                <label class="form-check-label" for="q34_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q34" id="q34_2" value="2">
                                <label class="form-check-label" for="q34_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q34" id="q34_3" value="3">
                                <label class="form-check-label" for="q34_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q34" id="q34_4" value="4">
                                <label class="form-check-label" for="q34_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q34')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 35 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Abilitatea de a utiliza calculatorul şi de a naviga pe internet</label>
                <div class="d-flex justify-content-between align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q35" id="q35_1" value="1">
                                <label class="form-check-label" for="q35_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q35" id="q35_2" value="2">
                                <label class="form-check-label" for="q35_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q35" id="q35_3" value="3">
                                <label class="form-check-label" for="q35_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q35" id="q35_4" value="4">
                                <label class="form-check-label" for="q35_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q35')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 36 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Abilitatea de a veni cu idei şi soluţii noi</label>
                <div class="d-flex justify-content-between align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q36" id="q36_1" value="1">
                                <label class="form-check-label" for="q36_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q36" id="q36_2" value="2">
                                <label class="form-check-label" for="q36_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q36" id="q36_3" value="3">
                                <label class="form-check-label" for="q36_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q36" id="q36_4" value="4">
                                <label class="form-check-label" for="q36_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q36')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 37 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Disponibilitatea de a pune la îndoială ideile proprii şi ale altora</label>
                <div class="d-flex justify-content-between align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">

                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q37" id="q37_1" value="1">
                                <label class="form-check-label" for="q37_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q37" id="q37_2" value="2">
                                <label class="form-check-label" for="q37_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q37" id="q37_3" value="3">
                                <label class="form-check-label" for="q37_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q37" id="q37_4" value="4">
                                <label class="form-check-label" for="q37_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q37')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 38 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Abilitatea de a prezenta produse, idei sau rapoarte în faţa unei audienţe</label>
                <div class="d-flex justify-content-between align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">
                            <div id="wrap-wrap">
                                <div class="form-check me-3 position-relative">
                                    <input class="form-check-input" type="radio" name="q38" id="q38_1" value="1">
                                    <label class="form-check-label" for="q38_1">Foarte slab</label>
                                    <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                                </div>
                                <div class="form-check me-3 position-relative">
                                    <input class="form-check-input" type="radio" name="q38" id="q38_2" value="2">
                                    <label class="form-check-label" for="q38_2">Slab</label>
                                    <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                                </div>
                                <div class="form-check me-3 position-relative">
                                    <input class="form-check-input" type="radio" name="q38" id="q38_3" value="3">
                                    <label class="form-check-label" for="q38_3">Bun</label>
                                    <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                                </div>
                                <div class="form-check me-3 position-relative">
                                    <input class="form-check-input" type="radio" name="q38" id="q38_4" value="4">
                                    <label class="form-check-label" for="q38_4">Foarte bun</label>
                                    <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                                </div>
                                <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q38')">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 39 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Abilitatea de a elabora rapoarte, note sau alte documente</label>
                <div class="d-flex justify-content-between align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q39" id="q39_1" value="1">
                                <label class="form-check-label" for="q39_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q39" id="q39_2" value="2">
                                <label class="form-check-label" for="q39_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q39" id="q39_3" value="3">
                                <label class="form-check-label" for="q39_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q39" id="q39_4" value="4">
                                <label class="form-check-label" for="q39_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q39')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 40 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Abilitatea de a scrie şi de a conversa într-o limbă străină</label>
                <div class="d-flex justify-content-between align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q40" id="q40_1" value="1">
                                <label class="form-check-label" for="q40_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q40" id="q40_2" value="2">
                                <label class="form-check-label" for="q40_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q40" id="q40_3" value="3">
                                <label class="form-check-label" for="q40_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q40" id="q40_4" value="4">
                                <label class="form-check-label" for="q40_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q40')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 41 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Capacitatea de a interpreta normele de drept în raport cu situaţiile create (numai pentru absolvenţii domeniului Drept)</label>
                <div class="d-flex justify-content-between align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q41" id="q41_1" value="1">
                                <label class="form-check-label" for="q41_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q41" id="q41_2" value="2">
                                <label class="form-check-label" for="q41_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q41" id="q41_3" value="3">
                                <label class="form-check-label" for="q41_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q41" id="q41_4" value="4">
                                <label class="form-check-label" for="q41_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q41')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 42 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Existența materialelor didactice necesare, la Biblioteca Universității</label>
                <div class="d-flex justify-content-between align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q42" id="q42_1" value="1">
                                <label class="form-check-label" for="q42_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q42" id="q42_2" value="2">
                                <label class="form-check-label" for="q42_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q42" id="q42_3" value="3">
                                <label class="form-check-label" for="q42_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q42" id="q42_4" value="4">
                                <label class="form-check-label" for="q42_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q42')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 43 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Oferirea de către Universitate a posibilitățiide derulare a stagiilor de practică, prin parteneriate cu mediul public și privat</label>
                <div class="d-flex justify-content-between align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q43" id="q43_1" value="1">
                                <label class="form-check-label" for="q43_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q43" id="q43_2" value="2">
                                <label class="form-check-label" for="q43_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q43" id="q43_3" value="3">
                                <label class="form-check-label" for="q43_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q43" id="q43_4" value="4">
                                <label class="form-check-label" for="q43_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q43')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 44 -->
            <div class="mb-3">
                <label class="form-label  text-primary">Oportunități de a studia sau de a efectua practica în străinătate, prin programul Erasmus.</label>
                <div class="d-flex justify-content-between align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q44" id="q44_1" value="1">
                                <label class="form-check-label" for="q44_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q44" id="q44_2" value="2">
                                <label class="form-check-label" for="q44_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q44" id="q44_3" value="3">
                                <label class="form-check-label" for="q44_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q44" id="q44_4" value="4">
                                <label class="form-check-label" for="q44_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q44')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 45-->
            <div class="mb-3">
                <label class="form-label  text-primary">Existența serviciilor de informare, consiliere și orientare în carieră în Universitate</label>
                <div class="d-flex justify-content-between align-items-center shadow-container">
                    <div class="d-flex">
                        <div id="wrap-wrap">
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q45" id="q45_1" value="1">
                                <label class="form-check-label" for="q45_1">Foarte slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q45" id="q45_2" value="2">
                                <label class="form-check-label" for="q45_2">Slab</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură slabă.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q45" id="q45_3" value="3">
                                <label class="form-check-label" for="q45_3">Bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură bună.</span>
                            </div>
                            <div class="form-check me-3 position-relative">
                                <input class="form-check-input" type="radio" name="q45" id="q45_4" value="4">
                                <label class="form-check-label" for="q45_4">Foarte bun</label>
                                <span class="custom-tooltip">Aceasta înseamnă o infrastructură foarte bună.</span>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" onclick="resetQuestion('q45')">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="step-buttons">
                <button type="button" class="btn btn-secondary" onclick="prevSection()">Pasul Anterior</button>
                <button type="button" class="btn btn-primary" onclick="nextSection()">Pasul Următor</button>
            </div>
        </div>

        <!-- Section 3 Informații Carieră -->
        <div id="section-3" class="form-section">
            <h5 class="mt-5"><br>Informații Carieră</h5>
            <!-- Question 1 -->
            <div class="mb-3">
                <label class="form-label text-primary">Care este situația dumneavoastră profesională
                    actuală?</label>
                <div class="shadow-container">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="situatiaProfesionala" id="option1" value="Angajat" checked>
                        <label class="form-check-label" for="option1">Angajat (inclusiv propriul angajator sau aflat
                            în stagii de pregătire)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="situatiaProfesionala" id="option2" value="profesie_liberala">
                        <label class="form-check-label" for="option2">Profesie liberală (PFA), asociat, administrator sau angajat al
                            propriei societăți comerciale sau al unei societăți comerciale aparținând familiei</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="situatiaProfesionala" id="option3" value="Participant la cursuri">
                        <label class="form-check-label" for="option3">Participant la cursuri de formare
                            profesională</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="situatiaProfesionala" id="option4" value="Studii aprofundate">
                        <label class="form-check-label" for="option4">Înscris la studii universitare aprofundate
                            (masterat, doctorat, alte studii postuniversitare)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="situatiaProfesionala" id="option5" value="Fără loc de muncă">
                        <label class="form-check-label" for="option5">Fără loc de muncă, dar în căutare de loc de
                            muncă</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="situatiaProfesionala" id="option6" value="Fără intenție de angajare">
                        <label class="form-check-label" for="option6">Fără loc de muncă și fără intenția de a se
                            angaja (creștere copil, boală etc)</label>
                    </div>

                </div>
            </div>

            <!-- Question 2 -->
            <div class="mb-3">
                <label class="form-label text-primary">Ați înființat, în calitate de asociat/acționar/profesie
                    liberală, o companie până în prezent? În caz afirmativ, vă rugăm să precizați tipul
                    acesteia.</label>
                <div class="shadow-container">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="company" id="yes" value="Da">
                        <label class="form-check-label" for="yes">Da</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="company" id="no" value="Nu">
                        <label class="form-check-label" for="no">Nu</label>
                    </div>
                    <button type="button" class="btn btn-danger btn-sm mt-2"
                        onclick="resetQuestion('company')">Reset</button>
                </div>
            </div>

            <!-- Question aux -->
            <div class="mb-3">
                <label class="form-label text-primary">Locul dvs. de muncă se înscrie în categoria ”<span style="color: green;">green</span>” job?
                    <i style="font-size: small;"> (joburi green: poziții în agricultură, manufactură, cercetare și dezvoltare, poziții administrative și
                        servicii care au scopul de a conserva substanțial sau de a restaura calitatea mediului)
                    </i> </label>
                <div class="shadow-container">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="greenJob" id="yes" value="Da">
                        <label class="form-check-label" for="yes">Da</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="greenJob" id="no" value="Nu">
                        <label class="form-check-label" for="no">Nu</label>
                    </div>
                    <button type="button" class="btn btn-danger btn-sm mt-2"
                        onclick="resetQuestion('greenJob')">Reset</button>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="mb-3">
                <label class="form-label text-primary">Ați înființat, în calitate de asociat/acţionar/profesie liberală,
                    o societate până în prezent? În caz afirmativ, specificați tipul de societate comercială înființată</label>
                <div class="shadow-container">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="companyType" id="srl" value="SRL">
                        <label class="form-check-label" for="srl">SRL</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="companyType" id="srl_d" value="SRL-D">
                        <label class="form-check-label" for="srl_d">SRL-D</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="companyType" id="sa" value="SA">
                        <label class="form-check-label" for="sa">SA</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="companyType" id="ong" value="ONG">
                        <label class="form-check-label" for="ong">ONG</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="companyType" id="pfa" value="PFA">
                        <label class="form-check-label" for="pfa">PFA</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="companyType" id="ii" value="II">
                        <label class="form-check-label" for="ii">II</label>
                    </div>
                </div>
            </div>

            <!-- Question 4 -->

            <div class="mb-3">
                <label class="form-label text-primary">Anul înființării societății </label>
                <div class="shadow-container">
                    <input type="date" class="form-control w-3" id="infiintariiSocietatii" name="infiintariiSocietatii"
                        placeholder="Anul">
                    <div class="invalid-feedback">Vă rugăm să introduceți anul de început.</div>
                </div>
            </div>

            <!-- Question 5 -->

            <div class="mb-3">
                <label class="form-label text-primary">Domeniul de activitate al societății</label>
                <div class="shadow-container">
                    <textarea class="form-control" id="companyActivity" rows="3" name="domeniul_de_activitate"
                        placeholder="Scrieți o scurtă descriere a domeniului de activitate al companiei"></textarea>
                </div>
            </div>

            <!-- Question 6 -->
            <div class="mb-3">
                <label class="form-label text-primary">În ce localitate / țară este locul dumneavoastră de muncă actual?</label>
                <div class="shadow-container">
                    <select id="country" class="form-select" name="locatie_munca">
                        <option value="" disabled selected>Alegeți țara în care aveți locul de muncă</option>
                        <option value="România">România</option>
                        <option value="Germania">Germania</option>
                        <option value="Franța">Franța</option>
                        <option value="Italia">Italia</option>
                        <option value="Spania">Spania</option>
                        <option value="Altă țară">Altă țară</option>
                    </select>
                </div>
            </div>

            <!-- Question 7 -->
            <div class="mb-3">
                <label class="form-label text-primary">În ce data ați început activitatea la actualul loc de
                    muncă?</label>
                <div class="shadow-container">
                    <input type="date" class="form-control w-5" id="startYear" name="startYear"
                        placeholder="An început">
                    <div class="invalid-feedback">Vă rugăm să introduceți anul de început.</div>
                </div>
            </div>

            <!-- Question 8 -->

            <div class="mb-3">
                <label class="form-label text-primary">Ce funcție ocupați în prezent?</label>
                <div class="shadow-container">
                    <input type="text" class="form-control" name="rolulPresent" id="currentFunction"
                        placeholder="Scrieți numele funcției deținute" autocomplete="off">
                </div>
            </div>

            <!-- Question 9 -->

            <div class="mb-3">
                <label class="form-label text-primary">Postul ocupat corespunde specializării sau unui domeniu conex specializării obținute la absolvire?</label>
                <div class="shadow-container">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="positionMatch" id="positionYes"
                            value="Da">
                        <label class="form-check-label" for="positionYes">Da</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="positionMatch" id="positionNo" value="Nu">
                        <label class="form-check-label" for="positionNo">Nu</label>
                    </div>
                </div>
            </div>

            <!-- Question 10 -->

            <div class="mb-3">
                <label class="form-label text-primary">Considerați că pregătirea profesională dobândită la
                    Universitatea 1 Decembrie 1918 din Alba Iulia v-a ajutat în actuala d-voastră carieră?</label>
                <div class="shadow-container">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="careerHelp" id="careerHelpYes" value="Da">
                        <label class="form-check-label" for="careerHelpYes">Da</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="careerHelp" id="careerHelpNo" value="Nu">
                        <label class="form-check-label" for="careerHelpNo">Nu</label>
                    </div>
                </div>
            </div>

            <div class="step-buttons">
                <button type="button" class="btn btn-secondary" onclick="prevSection()">Pasul Anterior</button>
                <button type="submit" name="sub" class="btn btn-success" onclick="showSuccessMessage()">Finalizare</button>
            </div>

            <div id="successMessage" style="display: none;" class="alert alert-success mt-3">
                Formularul a fost completat cu succes! <span style="font-weight:bold;">Logging out...</span>
            </div>
        </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="../../public/js/form.js"></script>

</body>

</html>