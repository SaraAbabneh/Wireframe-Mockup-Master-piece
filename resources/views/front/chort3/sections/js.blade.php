<script>
    const filterSelect = document.getElementById('itBackgroundFilter');
    const peopleList = document.getElementById('peopleList').getElementsByTagName('li');

    filterSelect.addEventListener('change', () => {
        const selectedValue = filterSelect.value;
        for (const person of peopleList) {
            const itBackground = person.getAttribute('data-it-background') === 'true';
            if ((selectedValue === 'it' && itBackground) || (selectedValue === 'non-it' && !itBackground)) {
                person.style.display = 'block';
            } else if (selectedValue === 'all') {
                person.style.display = 'block';
            } else {
                person.style.display = 'none';
            }
        }
    });
</script>

<script>
    document.getElementById('itBackgroundFilter').addEventListener('change', function() {
        var selectedMajor = this.value;
        var students = document.querySelectorAll('[data-major]');
        students.forEach(function(student) {
            if (selectedMajor === 'all' || student.getAttribute('data-major') === selectedMajor) {
                student.style.display = 'block';
            } else {
                student.style.display = 'none';
            }
        });
    });
</script>
