<?php // [normalized strings file]

$string['adminacceptccs'] = 'Ποιά είδη πιστωτικών καρτών θα γίνονται δεκτά;';
$string['adminaccepts'] = 'Επιλέξτε επιτρεπόμενη μέθοδο πληρωμής και τον τύπο τους';
$string['adminauthcode'] = 'Εάν η πιστωτική κάρτα του χρήστη δεν μπορεί να συλληφθεί απευθείας από το διαδίκτυο, τότε να ληφθεί ο κωδικός εξουσιοδότησης από το τηλέφωνο από την τράπεζα του πελάτη.';
$string['adminauthorizeccapture'] = 'Προεπισκόπηση παραγγελίας και ρυθμίσεις προγραμματισμένης σύλληψης';
$string['adminauthorizeemail'] = 'Ρυθμίσεις αποστολής ηλεκτρονικού ταχυδρομείου';
$string['adminauthorizesettings'] = 'Ρυθμίσεις Authorize.net';
$string['adminauthorizewide'] = 'Ρυθμίσεις για όλο τον ιστοχώρο';
$string['adminavs'] = 'Τσεκάρετε αυτό εάν έχετε ενεργοποιήσει το σύστημα επιβεβαίωσης διεύθυνσης (Address Verification System, AVS) στον authorize.net λογαριασμό σας. Αυτό απαιτεί πεδία όπως δρόμος, νομός, χώρα και Τ.Κ. όταν ο χρήστης συμπληρώνει τη φόρμα πληρωμής.';
$string['adminconfighttps'] = 'Παρακαλώ βεβαιωθείτε ότι έχετε \\"<a href=\\"$a->url\\">ενεργοποιήσει το loginhttps</a>\\" για τη χρήση αυτής της υπομονάδας λογισμικού<br />στο Διαχείριση>> Μεταβλητές>> Ασφάλεια>> Ασφάλεια HTTP.';
$string['adminconfighttpsgo'] = 'Πηγαίνετε στην <a href=\\"$a->url\\">ασφαλή σελίδα</a> για ρύθμιση αυτής της υπομονάδας λογισμικού.';
$string['admincronsetup'] = 'Το σενάριο συντήρησης cron.php δεν έχει εκτελεστεί για τουλάχιστον 24 ώρες.<br /> Το cron πρέπει να ενεργοποιηθεί εάν θέλετε να χρησιμοποιήσετε τη δυνατότητα προγραμματισμένης σύλληψης. <br /><b>Ενεργοποιήστε</b> το \'Authorize.net plugin\' και <b>ρυθμίστε το cron</b> κανονικά; ή <b>ξετσεκάρετε το an_review</b> ξανά.<br /> Εάν απενεργοποιήσετε την προγραμματισμένη σύλληψη, οι συναλλαγές θα ακυρώνονται εκτός εάν τις δείτε μέσα σε 30 ημέρες.<br />Ελέγξτε <b> το an_review</b> και εισάγετε <b>\'0\' στο an_capture_day</b> πεδίο<br />εάν θέλετε <b> χειροκίνητα</b> να δέχεστε/απορρίπτετε πληρωμές μέσα σε 30 μέρες.';
$string['adminemailexpired'] = 'Αυτό είναι χρήσιμο για \'Χειροκίνητη σύλληψη\'. Οι διαχειριστές ενημερώνονται <b>$a</b> μέρες πριν για παραγγελίες που εκκρεμούν και λήγουν.';
$string['adminemailexpiredsort'] = 'Όταν ο αριθμός των παραγγελιών που εκκρεμούν και λήγουν αποστέλλονται στους καθηγητές με ηλεκτρονικό ταχυδρομείο, ποιό είναι σημαντικό;';
$string['adminemailexpiredsortcount'] = 'Πλήθος παραγγελιών';
$string['adminemailexpiredsortsum'] = 'Συνολικό ποσό';
$string['adminemailexpiredteacher'] = 'Εάν έχετε ενεργοποιήσει τη χειροκίνητη-σύλληψη (δείτε πιο πάνω) και οι καθηγητές χειρίζονται τις πληρωμές, μπορούν να ενημερώνονται και για παραγγελίες που εκκρεμούν και λήγουν. Θα αποσταλεί μήνυμα ηλεκτρονικού ταχυδρομείου σε κάθε διδάσκοντα μαθήματος σχετικά με το πλήθος των παραγγελιών που εκκρεμούν.';
$string['adminemailexpsetting'] = '(0=απενεργοποίηση αποστολής ηλεκτρονικού ταχυδρομείου, προεπιλογή=2, μέγιστο=5)<br />(Ρυθμίσεις χειροκίνητης σύλληψης για την αποστολή email: cron=ενεργοποιημένο, an_review=τσεκαρισμένο, an_capture_day=0, an_emailexpired=1-5)';
$string['adminhelpcapturetitle'] = 'Ημέρα προγραμματισμένης σύλληψης';
$string['adminhelpreviewtitle'] = 'Προεπισκόπηση παραγγελίας';
$string['adminneworder'] = 'Αγαπητέ διαχειριστή,
λάβατε μια νέα παραγγελία που εκκρεμεί:

ID Παραγγελίας: $a->orderid
ID Συναλλαγής: $a->transid
Χρήστης: $a->user
Μάθημα: $a->course
Ποσό: $a->amount

ΕΝΕΡΓΟΠΟΙΗΜΕΝΗ Η ΠΡΟΓΡΑΜΜΑΤΙΣΜΕΝΗ ΣΥΛΛΗΨΗ;: $a->acstatus

Εάν η προγραμματισμένη σύλληψη είναι ενεργοποιημένη, η πιστωτική κάρτα θα συλληφθεί στις $a->captureon και στη συνέχεια ο χρήστης θα εγγραφεί στο μάθημα, ειδάλλως θα λήξει στις $a->expireon και δε θα μπορεί να συλληφθεί μετά από αυτήν τη μέρα.

Μπορείτε επίσης να δέχεστε/απορρίπτετε την πληρωμή για εγγραφή του μαθητή ακολουθώντας αυτόν τον σύνδεσμο: $a->url';
$string['adminnewordersubject'] = '$a->course; Νέα παραγγελία που εκκρεμεί: $a->orderid';
$string['adminpendingorders'] = 'Έχετε απενεργοποιήσει τη δυνατότητα προγραμματισμένης σύλληψης.<br />Συνολικά $a->count συναλλαγές σε κατάσταση \'Επιβεβαιωμένη/Αναμένεται σύλληψη\' θα ακυρωθούν εκτός εάν τις τσεκάρετε.<br /> Για την αποδοχή/απόρριψη πληρωμών, πηγαίνετε στη σελίδα <a href=\'$a->url\'>Διαχείρισης Πληρωμών </a>.';
$string['adminreview'] = 'Προεπισκόπηση παραγγελίας πριν την επεξεργασία της πιστωτικής κάρτας.';
$string['adminteachermanagepay'] = 'Οι διδάσκοντες μπορούν να διαχειρίζονται τις πληρωμές του μαθήματος.';
$string['allpendingorders'] = 'Όλες οι παραγγελίες που εκκρεμούν.';
$string['amount'] = 'Ποσό';
$string['anlogin'] = 'Authorize.net: Όνομα εισόδου';
$string['anpassword'] = 'Authorize.net: Κωδικός';
$string['anreferer'] = 'Προσδιορίστε το URL referer εάν το έχετε εγκαταστήσει στο authorize.net λογαριασμό σας. Αυτό θα στείλει μια γραμμή \\"Referer: URL\\" ενσωματωμένη στην αίτηση.';
$string['antestmode'] = 'Εκτέλεση συναλλαγών σε δοκιμαστικό έλεγχο μόνο (δεν θα αποσπαστούν χρήματα)';
$string['antrankey'] = 'Authorize.net: Κλειδί συναλλαγής';
$string['approvedreview'] = 'Εγκεκριμένη προεπισκόπιση';
$string['authcaptured'] = 'Εξουσιοδοτημένη/ Συλλήφθηκε';
$string['authcode'] = 'Κωδικός Εξουσιοδότησης';
$string['authorize:managepayments'] = 'Διαχείριση πληρωμών';
$string['authorize:uploadcsv'] = 'Ανέβασμα αρχείου CSV';
$string['authorizedpendingcapture'] = 'Εξουσιοδοτημένη/ Εκκρεμεί Σύλληψη';
$string['authorizeerror'] = 'Σφάλμα Authorize.net: $a';
$string['avsa'] = 'Η διεύθυνση (οδός) ταιρίαζει, ο Τ.Κ. δεν ταιριάζει';
$string['avsb'] = 'Δεν παρέχονται πληροφορίες διεύθυνσης';
$string['avse'] = 'Σφάλμα συστήματος επιβεβαίωσης διεύθυνσης (Address Verification System)';
$string['avsg'] = 'Μη-Αμερικάνικη (Η.Π.Α) Τράπεζα Έκδοσης Καρτών';
$string['avsn'] = 'Η διεύθυνση (οδός) δεν ταιρίαζει, ο Τ.Κ. δεν ταιριάζει';
$string['avsp'] = 'Το σύστημα επιβεβαίωσης διεύθυνσης (Address Verification System) δεν είναι εφαρμόσιμο';
$string['avsr'] = 'Επανάληψη - Το σύστημα δεν είναι διαθέσιμο ή τελείωσε το χρονικό όριο';
$string['avsresult'] = 'Αποτέλεσμα AVS: $a';
$string['avss'] = 'Η υπηρεσία δεν υποστηρίζεται από τον εκδότη';
$string['avsu'] = 'Δεν είναι διαθέσιμες οι πληροφορίες διεύθυνσης';
$string['avsw'] = '9-ψήφιος Τ.Κ. ταιριάζει, η διεύθυνση (οδός) δεν ταιρίαζει';
$string['avsx'] = '9-ψήφιος Τ.Κ. ταιριάζει, η διεύθυνση (οδός) ταιρίαζει';
$string['avsy'] = '5-ψήφιος Τ.Κ. ταιριάζει, η διεύθυνση (οδός) ταιρίαζει';
$string['avsz'] = '5-ψήφιος Τ.Κ. ταιριάζει, η διεύθυνση (οδός) δεν ταιρίαζει';
$string['canbecredit'] = 'Επιστροφή χρημάτων από $a->upto';
$string['cancelled'] = 'Ακυρώθηκε';
$string['capture'] = 'Σύλληψη';
$string['capturedpendingsettle'] = 'Συλλήφθηκε/ Εκκρεμεί διακανονισμός';
$string['capturedsettled'] = 'Συλλήφθηκε/ Κανονίστηκε';
$string['captureyes'] = 'Η πιστωτική κάρτα θα συλληφθεί και ο φοιτητής θα εγγραφεί στο μάθημα. Είστε σίγουροι;';
$string['ccexpire'] = 'Ημερομηνία λήξης';
$string['ccexpired'] = 'Η πιστωτική κάρτα έχει λήξει';
$string['ccinvalid'] = 'Μη έγκυρος αριθμός πιστωτικής κάρτας';
$string['cclastfour'] = 'Τελευταία τέσσερα ψηφία πιστωτικής κάρτας';
$string['ccno'] = 'Αριθμός πιστωτικής κάρτας';
$string['cctype'] = 'Τύπος πιστωτικής κάρτας';
$string['ccvv'] = 'Επιβεβαίωση πιστωτικής κάρτας';
$string['ccvvhelp'] = 'Δείτε το πίσω μέρος της κάρτας (τελευταία 3 ψηφία)';
$string['choosemethod'] = 'Εάν γνωρίζετε το κλειδί εγγραφής, εισάγετέ το παρακάτω.<br /> Ειδάλλως, θα πρέπει να πληρώσετε για αυτό το μάθημα.';
$string['chooseone'] = 'Συμπληρώστε ένα ή και τα δύο από τα παρακάτω πεδία. Δεν εμφανίζεται ο κωδικός.';
$string['costdefaultdesc'] = '<strong>Στις ρυθμίσεις μαθήματος, εισάγετε -1 </strong> για να χρησιμοποιήσετε το προεπιλεγμένο κόστος στο πεδίο κόστος του μαθήματος.';
$string['cutofftime'] = 'Χρόνος αποκοπής συναλλαγής. Πότε ξεκινάει ο διακανονισμός της τελευταίας συναλλαγής;';
$string['dataentered'] = 'Δεδομένα που εισήχθησαν';
$string['delete'] = 'Κατέστρεψε';
$string['description'] = 'Το άρθρωμα Authorize.net σας επιτρέπει να ρυθμίσετε μαθήματα επί πληρωμής μέσω παρόχων πληρωμής. Εάν το κόστος για κάποιο μάθημα είναι μηδέν, τότε δεν ζητείται από τους μαθητές πληρωμή κατά την είσοδο. Δύο τρόποι για να ρυθμίσετε το κόστος του μαθήματος (1) κόστος για όλο το site ή (2) μια ρύθμιση μαθήματος για κάθε μάθημα ξεχωριστά. Το κόστος μαθήματος παρακάμπτει το κόστος site.<br /><br /><b>Σημείωση:</b> Εάν εισάγετε κλειδί εγγραφής στις ρυθμίσεις μαθήματος, τότε οι μαθητές θα μπορούν να εγγραφούν με κλειδί. Αυτό είναι χρήσιμο εάν έχετε μίγμα φοιτητών που πληρώνουν και φοιτητών που δεν πληρώνουν.';
$string['echeckabacode'] = 'Αριθμός ΑΒΑ Τράπεζας';
$string['echeckaccnum'] = 'Αριθμός τραπεζικού λογαριασμού';
$string['echeckacctype'] = 'Τύπος τραπεζικού λογαριασμού';
$string['echeckbankname'] = 'Όνομα τράπεζας';
$string['echeckbusinesschecking'] = 'Ελέγχος επιχείρησης';
$string['echeckchecking'] = 'Έλεγχος';
$string['echeckfirslasttname'] = 'Ιδιοκτήτης λογαριασμού τράπεζας';
$string['echecksavings'] = 'Αποταμιεύσεις';
$string['enrolname'] = 'Πύλη πληρωμής Authorize.net';
$string['expired'] = 'Ληγμένο';
$string['haveauthcode'] = 'Έχω ήδη έναν κωδικό εξουσιοδότησης';
$string['howmuch'] = 'Πόσο;';
$string['httpsrequired'] = 'Με λύπη σας πληροφορούμε πως το αίτημα σας δεν δύναται να επεξεργασθεί αυτήν τη στιγμή. Η ρύθμιση της σελίδας δεν έγινε σωστά.<br /><br />Παρακαλώ μην εισάγετε τον αριθμό της κάρτας σας, εκτός εάν δείτε μια κίτρινη κλειδαριά στην κάτω περιοχή του browser. Εάν το σύμβολο εμφανισθεί, σημαίνει πως η σελίδα κρυπτογραφεί όλα τα δεδομένα που αποστέλλονται μεταξύ πελάτη και εξυπηρετητή. Δηλαδή, η συναλλαγή μεταξύ των δύο υπολογιστών είναι προστατευμένη, έτσι ο αριθμός της κάρτας σας δεν μπορεί να συλληφθεί στο διαδίκτυο.';
$string['invalidaba'] = 'Μη έγκυρος αριθμός ABA';
$string['invalidaccnum'] = 'Μη έγκυρος αριθμός λογαριασμού';
$string['invalidacctype'] = 'Μη έγκυρος τύπος λογαριασμού';
$string['isbusinesschecking'] = 'Έχει τον έλεγχο των επιχειρήσεων?';
$string['logindesc'] = 'Αυτή η επιλογή πρέπει να είναι ενεργή.<br /><br />Παρακαλώ βεβαιωθείτε ότι έχετε ενεργοποιήσει το <a href=\\"$a->url\\">loginhttps</a> στο Διαχειριστής>> Μεταβλητές >> Ασφάλεια.<br /><br />';
$string['logininfo'] = 'Το όνομα εισόδου, ο κωδικός και το κλειδί συναλλαγής δεν εμφανίζονται ως μέτρο ασφαλείας. Δεν υπάρχει λόγος εισαγωγής τους εάν τα έχετε ρυθμίσει και παλιότερα. Εμφανίζεται ένα πράσινο κείμενο στα αριστερά του πλαισίου εάν τα πεδία έχουν ήδη ρυθμιστεί. Εάν εισάγετε τα πεδία για πρώτη φορά, το όνομα εισόδου (*) απαιτείται και πρέπει να εισάγετε <strong>είτε</strong> το κλειδί συναλλαγής(#1) <strong>είτε</strong> τον κωδικό(#2) στο αντίστοιχο πλαίσιο. Προτείνουμε να εισάγετε το κλειδί συναλλαγής ως μέτρο ασφαλείας. Εάν θέλετε να διαγράψετε τον τρέχοντα κωδικό, τσεκάρετε το checkbox.';
$string['methodcc'] = 'Πιστωτική κάρτα';
$string['methodecheck'] = 'eCheck (ACH)';
$string['missingaba'] = 'Λείπει ο αριθμός ABA';
$string['missingaddress'] = 'Λείπει η διεύθυνση';
$string['missingbankname'] = 'Λείπει το όνομα της τράπεζας';
$string['missingcc'] = 'Λείπει ο αριθμός της κάρτας';
$string['missingccauthcode'] = 'Λείπει ο κωδικός εξουσιοδότησης';
$string['missingccexpire'] = 'Λείπει η ημερομηνία λήξης';
$string['missingcctype'] = 'Λείπει ο τύπος της κάρτας';
$string['missingcvv'] = 'Λείπει ο αριθμός επιβεβαίωσης';
$string['missingzip'] = 'Λείπει ο ταχυδρομικός κωδικός';
$string['mypaymentsonly'] = 'Εμφάνιση μόνο των πληρωμών μου';
$string['nameoncard'] = 'Όνομα στην κάρτα';
$string['new'] = 'Νέο';
$string['noreturns'] = 'Χωρίς επιστροφή!';
$string['notsettled'] = 'Δεν κανονίστηκε';
$string['orderdetails'] = 'Λεπτομέρειες Παραγγελίας';
$string['orderid'] = 'Αναγνριστικό Παραγγελίας';
$string['paymentmanagement'] = 'Διαχείριση πληρωμής';
$string['paymentmethod'] = 'Μέθοδος πληρωμής';
$string['paymentpending'] = 'Η πληρωμή σας εκκρεμεί για αυτό το μάθημα με τον αριθμό παραγγελίας $a->orderid. Δείτε <a href=\'$a->url\'>Λεπτομέρειες Παραγγελίας</a>.';
$string['pendingecheckemail'] = 'Αγαπητέ διαχειριστή,
Υπάρχουν $a->count ηλεκτρονικά echecks που εκκρεμούν τώρα και πρέπει να ανεβάσετε ένα αρχείο csv για να εγγραφούν οι χρήστες. 
Πατήστε στο σύνδεσμο και διαβάστε τη βοήθεια στη σελίδα που εμφανίζεται: $a->url';
$string['pendingechecksubject'] = '$a->course: Εκκρεμούν echecks ($a->count)';
$string['pendingordersemail'] = 'Αγαπητέ διαχειριστή,
$a->pending συναλλαγές για το μάθημα \\"$a->course\\" θα λήξουν εάν δεν αποδεχτείτε την πληρωμή μέσα σε $a->days μέρες.
Αυτό είναι ένα προειδοποιητικό μήνυμα, επειδή δεν έχετε ενεργοποιήσει την προγραμματισμένη-σύλληψη. Σημαίνει πως πρέπει να αποδεχτείτε ή να αρνηθείτε τις πληρωμές χειροκίνητα. 
Για την αποδοχή ή άρνηση πληρωμών πηγαίνετε στο: 
$a->url
Για την ενεργοποίηση της προγραμματισμένης-σύλληψης, δηλαδή για να μην λαμβάνεται προειδοποιητικά μηνύματα, πηγαίνετε στο:
$a->enrolurl';
$string['pendingordersemailteacher'] = 'Αγαπητέ καθηγητή,
$a->pending συναλλαγές είχαν κόστος $a->currency $a->sumcost για το μάθημα \\"$a->course\\"
θα λήξουν εάν δε δεχτήτε την πληρωμή σε $a->days ημέρες.
Πρέπει να δεχτείτε ή να αρνηθείτε τις πληρωμές χειροκίνητα γιατί ο διαχειριστής δεν έχει ενεργοποιήσει την προγραμματισμένη-σύλληψη.
$a->url';
$string['pendingorderssubject'] = 'ΠΡΟΣΟΧΗ: $a->course, $a->pending παραγελλίες θα λήξουν μέσα σε $a->days μέρες.';
$string['reason11'] = 'Μια διπλότυπη συναλλαγή έχει υποβληθεί.';
$string['reason13'] = 'Το ID εισόδου του εμπόρου είναι μη έγκυρο ή ο λογαριασμός είναι ανενεργός.';
$string['reason16'] = 'Δεν βρέθηκε η συναλλαγή.';
$string['reason17'] = 'Ο έμπορος δεν δέχεται αυτού του τύπου την πιστωτική κάρτα.';
$string['reason245'] = 'Αυτός ο τύπος eCheck δεν επιτρέπεται όταν γίνεται χρήση της φόρμας πληρωμής στην πύλη πληρωμής';
$string['reason246'] = 'Αυτός ο τύπος eCheck δεν επιτρέπεται.';
$string['reason27'] = 'Η συναλλαγή κατέληξε σε αποτυχημένο συνδυασμό AVS. Η διεύθυνση που παρέχθηκε δεν ταιριάζει στη διεύθυνση χρέωσης του ιδιοκτήτη της κάρτας.';
$string['reason28'] = 'Ο έμπορος δεν δέχεται αυτού του τύπου την πιστωτική κάρτα.';
$string['reason30'] = 'Η ρύθμιση με τον επεξεργαστή είναι μη-έγκυρη. Επικοινωνήστε με τον πάροχο υπηρεσιών του εμπόρου.';
$string['reason39'] = 'Ο κωδικός συναλλάγματος δεν είναι έγκυρος, δεν υποστηρίζεται, δεν επιτρέπεται από τον έμπορο ή δεν έχει ισοτιμία.';
$string['reason43'] = 'Η ρύθμιση του εμπόρου στον επεξεργαστή είναι μη-έγκυρη. Επικοινωνήστε με τον πάροχο υπηρεσιών του εμπόρου.';
$string['reason44'] = 'Η συναλλαγή απορρίφθηκε. Σφάλφα στο φίλτρο του κωδικού της κάρτας.';
$string['reason45'] = 'Η συναλλαγή απορρίφθηκε. Σφάλφα στο φίλτρο του κωδικού της κάρτας ή στο AVS.';
$string['reason47'] = 'Το ποσό που απαιτείται για τον διακανονισμό δεν μπορεί να είναι μεγαλύτερο από το αρχικό ποσό που εξουσιοδοτήθηκε.';
$string['reason5'] = 'Απαιτείται ένα έγκυρο ποσό.';
$string['reason50'] = 'Η συναλλαγή αναμένει διακανονισμό και δεν μπορεί να επιστραφεί.';
$string['reason51'] = 'Το σύνολο των πιστωτικών μονάδων για αυτή την συναλλαγή είναι μεγαλύτερο από το αρχικό ποσό της συναλλαγής.';
$string['reason54'] = 'Η αναφερόμενη συναλλαγή δεν ικανοποιεί τα κριτήρια για την έκδοση πιστωτικής μονάδας.';
$string['reason55'] = 'Το πλήθος των πιστωτικών μονάδων για την αναφερόμενη συναλλαγή ξεπερνά το αρχικό ποσό χρέωσης.';
$string['reason56'] = 'Αυτός ο έμπορος δέχεται συναλλαγές eCheck (ACH) μόνο. Δε γίνονται δεκτές συναλλαγές με πιστωτικές κάρτες.';
$string['refund'] = 'Επιστροφή χρημάτων';
$string['refunded'] = 'Επεστράφησαν χρήματα';
$string['returns'] = 'Επιστροφές';
$string['reviewday'] = 'Σύλληψη της πιστωτικής κάρτας αυτόματα εκτός εάν ο καθηγητής ή ο διαχειριστής δουν την παραγελλία μέσα σε <b>$a</b> ημέρες. ΠΡΕΠΕΙ ΝΑ ΕΙΝΑΙ ΕΝΕΡΓΟΠΟΙΗΜΕΝΟ ΤΟ CRON.<br />(0 μέρες σημαίνει ότι θα απενεργοποιηθεί η προγραμματισμένη-σύλληψη και πως ο καθηγητής και ο διαχειριστής θα ελέγξουν την παραγελλία χειροκίνητα. Η συναλλαγή θα ακυρωθεί εάν απενεργοποιήσετε την προγραμματισμένη-σύλληψη ή την δείτε μέσα σε 30 μέρες.)';
$string['reviewfailed'] = 'Ο έλεγχος απέτυχε.';
$string['reviewnotify'] = 'Η πληρωμή σας θα ελεγχθεί. Να αναμένετε email μέσα σε λίγες ημέρες από τον διδάσκοντα.';
$string['sendpaymentbutton'] = 'Αποστολή πληρωμής';
$string['settled'] = 'Κανονίστηκε';
$string['settlementdate'] = 'Ημερομηνία διακανονισμού';
$string['shopper'] = 'Καταναλωτής';
$string['subvoidyes'] = 'Η συναλλαγή, το ποσό της οποίας επιστράφηκε, ($a->transid) θα ακυρωθεί και αυτό θα προκαλέσει πίστωση $a->amount στο λογαριαμό σας. Είστε σίγουρος/η;';
$string['tested'] = 'Δοκιμασμένο';
$string['testmode'] = '[ΦΑΣΗ ΔΟΚΙΜΗΣ]';
$string['testwarning'] = 'Η σύλληψη/ακύρωση/επιστροφή φαίνεται να λειτουργούν στη φάση δοκιμής, αλλά η εγγραφή δεν ενημερώθηκε ή δεν εισήχθη στη βάση δεδομένων.';
$string['transid'] = 'ID Συναλλαγής';
$string['underreview'] = 'Υπό εξέταση';
$string['unenrolstudent'] = 'Διαγραφή μαθητή;';
$string['uploadcsv'] = 'Ανεβάστε ένα αρχείο CSV';
$string['usingccmethod'] = 'Εγγραφή με χρήση <a href=\\"$a->url\\"><strong> Πιστωτικής Κάρτα</strong></a>';
$string['usingecheckmethod'] = 'Εγγραφή με χρήση <a href=\\"$a->url\\"><strong> eCheck </strong></a>';
$string['verifyaccount'] = 'Επιβεβαιώστε τον λογαριασμό εμπόρου σας στο authorize.net';
$string['verifyaccountresult'] = 'Αποτέλεσμα επιβεβαίωσης: $a';
$string['void'] = 'Κενό';
$string['voidyes'] = 'Η συναλλαγή θα ακυρωθεί. Είστε σίγουρος/η;';
$string['welcometocoursesemail'] = 'Αγαπητέ φοιτητή,
Σας ευχαριστούμε για την πληρωμή. Έχετε εγγραφεί στα εξής μαθήματα:
$a->courses
Μπορείτε να επεξεργαστείτε το προφίλ σας:
$a->profileurl
Μπορείτε να δείτε τις λεπτομέρειες πληρωμής:
$a->paymenturl';
$string['youcantdo'] = 'Δεν μπορείτε να κάνετε αυτήν την ενέργεια: $a->action';
$string['zipcode'] = 'Ταχυδρομικός Κώδικας';

?>