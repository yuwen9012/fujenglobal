window.onload = function() {
    loadQualification();
    loadChecklist();

    const fixedTop = document.querySelector('.fixed-top');
    const content = document.querySelector('#content');
    const fixedTopHeight = fixedTop.offsetHeight;
    content.style.marginTop = fixedTopHeight + 'px';
}

function loadQualification() {
    $.ajax({
        url: './php/get_sheet_data.php',
        type: 'POST',
        data: {
            dataSheet: 'how2apply_qualification',
        },
        success: function(response) {
            let qualification = document.getElementById('program-qualification');

            const datas = JSON.parse(response);

            datas.forEach((data, index) => {
                let item = `<div class="col-md-3 text-center my-5 mb-0">
                                <div class="circle-container">
                                    <div class="circle">${index + 1}</div>
                                </div>
                                <div class="text-container">
                                    <h4 class="fw-normal py-3">${data.item}</h4>
                                </div>
                            </div>`;
                qualification.insertAdjacentHTML('beforeend', item);
            })
        },
        error: function() {
            console.error('錯誤');
        }
    });
}

function loadChecklist() {
    $.ajax({
        url: './php/get_sheet_data.php',
        type: 'POST',
        data: {
            dataSheet: 'how2apply_checklist',
        },
        success: function(response) {
            let checklist = document.getElementById('checklist');

            const datas = JSON.parse(response);

            datas.forEach((data, index) => {
                let item = `<li>${data.item}</li>`;
                checklist.insertAdjacentHTML('beforeend', item);
            })
        },
        error: function() {
            console.error('錯誤');
        }
    });
}