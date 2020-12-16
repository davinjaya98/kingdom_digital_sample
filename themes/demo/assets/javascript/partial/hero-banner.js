(function() {
    let componentTemplate = `
        <div class="col-xs-12 col-md-4">
            <div class="box-wrapper">
                <img class="box-icon" src="[C-PATH]">
                <div class="box-content-wrapper">
                    <div class="box-title">
                        [C-TITLE]
                    </div>
                    <div class="box-description">
                        [C-DESCRIPTION]
                    </div>
                    <div class="see-more">
                        Click to see more!
                    </div>
                </div>
            </div>
        </div>
    `;
    let loadHeroBanner = () => {
        $.ajax({
            url: '/storage/app/media/icons/list.json',
            method: 'GET',
            success: (resp) => {
                console.log(resp);
                resp.forEach((data) => {
                    //Perform deep copy
                    let tempTemplate = String(componentTemplate);
                    //Replace to necessary data
                    tempTemplate = tempTemplate.replace('[C-PATH]',data.resourcePath);
                    tempTemplate = tempTemplate.replace('[C-TITLE]',data.title);
                    tempTemplate = tempTemplate.replace('[C-DESCRIPTION]',data.description);
                    
                    //Appen to html
                    $(".c-hero > .row").append(tempTemplate);
                });
            },
            error: (err) => {
                console.log(err);
            }
        });
    }
    loadHeroBanner();
})()