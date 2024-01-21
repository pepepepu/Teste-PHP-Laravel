<style>
    @import url('https://fonts.googleapis.com/css2?family=Gabarito:wght@400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    .body-custom {
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #eeeded;
        font-family: 'Montserrat';
    }

    .container-custom-1 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #faf7f7;
        height: 80%;
        width: 80%;
        padding-top: 20px;
    }

    .text-title-custom {
        font-weight: 800;
        font-size: 50px;
    }

    .container-custom-2 {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        background-color: #d1d1d1;
        width: 95%;
        padding: 10px 15px;
        margin-top: 15px;
        border-radius: 10px;
    }

    .select-custom-categories {
        font-weight: 700;
        font-size: 25px;
        width: auto;
        padding: 4px 6px;
        border-radius: 20px;
        border: 1px solid black;
    }

    .select-custom-options {
        font-weight: 5700;
        font-size: 15px;
        width: auto;
        padding: 4px 6px;
        border-radius: 20px;
        border: 1px solid black;
    }

    .container-custom-select {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 10px;
        width: 100%
    }

    .label-custom {
        font-weight: 700;
        font-size: 15px;
    }

    .select-custom {
        font-weight: 500;
        font-size: 15px;
        width: auto;
        padding: 4px 6px;
        border-radius: 20px;
        border: 1px solid black;
    }

    .container-custom-buttons {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 10px; 
        width: 30%
    }

    .custom-buttons-header {
        padding: 3px 12px;
        border-radius: 20px;
        border: none;
        font-weight: 700;
        font-size: 15px;
        transition: 0.5s;
        text-decoration: none;
        color: black;
    }

    .delete-header {
        background-color: #c93030;
    }

    .delete-header:hover {
        background-color: #ad1111;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
    }

    .add-header{
        background-color: #51bf5e;
    }

    .add-header:hover{
        background-color: #00b115;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
    }

    .select-header{
        background-color: #cfc53b;
    }

    .select-header:hover{
        background-color: #c4b20c;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
    }

    .container-custom-table {
        width: 90%;
        margin-top: 15px;
        margin-bottom: 15px;
        overflow-y: scroll;
    }

    .custom-table {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
    }
    
    .table-head-body-custom {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    .table-head-body-custom:nth-child(1) {
        background-color: #faf7f7;
        position: sticky;
        top: 0;
        z-index: 1;
    }

    .table-row-custom {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        text-align: center;
        gap: 10px;
        width: 100%;
        padding: 0px 20px 0px 0px;
    }

    .table-header-custom {
        margin-bottom: 10px;
    }

    .table-header-custom:nth-child(1) {
        width: 25%;
    }
    .table-header-custom:nth-child(2) {
        width: 40%;
    }
    .table-header-custom:nth-child(3) {
        width: 20%;
    }
    .table-header-custom:nth-child(4) {
        width: 15%;
    }

    .table-data-custom{
        margin-bottom: 10px;
    }

    .table-data-custom:nth-child(1) {
        width: 25%;
    }
    .table-data-custom:nth-child(2) {
        width: 40%;
    }
    .table-data-custom:nth-child(3) {
        width: 20%;
    }
    .table-data-custom:nth-child(4) {
        width: 15%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 5px;
    }

    .icon-custom {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        border: none;
        padding: 8px;
        border-radius: 5px;
        transition: 0.5s;
    }

    .ico-delete {
        background-color: #c93030;
    }
    .ico-delete:hover {
        background-color: #ad1111;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
    }
    .ico-update {
        background-color: #3c73d2;
        text-decoration: none;
        color: black;
    }
    .ico-update:hover {
        background-color: #0e4ab1;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
    }

    .ico-view {
        background-color: #c84fba;
        text-decoration: none;
        color: black;
    }
    .ico-view:hover {
        background-color: #b10e9e;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
    }
    .alert-custom{
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 5px 20px;
        border-radius: 20px;
        width: 40%;
    }
    .alert-custom-text {
        margin: 0;
    }
    .label-radio {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        gap: 5px;
    }
    .filter-form {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        gap: 15px;
        padding: 0px 10px;
    }
    .filter-button {
        border: none;
        border-radius: 20px;
        font-weight: 600;
        padding: 3px 10px;
        transition: .4s;
    }
    .filter-button:hover {
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
    }
    #checkbox {
        width: 20px;
        height: 20px;
        margin: 10px;
    }
</style>