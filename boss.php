<?php
include "link_it.php";
include "files/navbar.php";
// some alerts for msgs
include "files/alert.php";
?>
<div class=" d-flex justify-content-center align-items-center select ">
<!-- in this part i include all the btns in the menu -->
   <?php
     include "files/buttons.php";
   ?>
    <button id="Employee_request_btn" type="button" class="btn font-weight-bold width ml-3 selects"><i
            class="fas fa-list-alt mr-1"></i>Employee request</button>
</div>
<!-- include add emlyer AND Update  and listforms  -->
<?php
include "files/emplyers_list.php";
include "files/form_add.php";
include "files/Update_form.php"; 
?>
<div id="Employee_request" style="display: none ">
    <div class="container p-4 shadow mt-5 rounded">
        <h4 class="text-center">abdelkbir khouilid</h4>
        <p>Musical notation serves as a set of directions for a performer, but there is a whole continuum of
            possibilities
            concerning how much the performer determines the final form of the rendered work in performance.

            Even in a conventional Western piece of instrumental music, in which all of the melodies, chords, and
            basslines
            are written out in musical notation, the performer has a degree of latitude to add artistic interpretation
            to
            the work, by such means as by varying his or her articulation and phrasing, choosing how long to make
            fermatas
            (held notes) or pauses, and — in the case of bowed string instruments, woodwinds or brass instruments —
            deciding
            whether to use expressive effects such as vibrato or portamento. For a singer or instrumental performer, the
            process of deciding how to perform music that has been previously composed and notated is termed
            "interpretation". Different performers' interpretations of the same work of music can vary widely, in terms
            of
            the tempos that are chosen and the playing or singing style or phrasing of the melodies. Composers and
            songwriters who present their own music are interpreting, just as much as those who perform the music of
            others.
            The standard body of choices and techniques present at a given time and a given place is referred to as
            performance practice, whereas interpretation is generally used to mean the individual choices of a
            performer.[citation needed]
        </p>
        <div class="d-flex justify-content-around text-center font-weight-bold align-items-center">
            <p>12 <br> Score</p>
            <p>12 <br> Score</p>
            <button id="add_Employee_btn" type="button" class="btn  btn-success  height font-weight-bold"><i
                    class="fas fa-check"></i>
                Accepte</button>
            <button id="add_Employee_btn" type="button" class="btn font-weight-bold btn-danger height btn"><i
                    class="fas fa-times"></i>
                Refusal</button>
        </div>
    </div>
</div>


<script src='src/js/general.js'></script>
<?php
include "files/footer.php";
?>