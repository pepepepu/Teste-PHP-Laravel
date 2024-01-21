<style>
    @import url('https://fonts.googleapis.com/css2?family=Gabarito:wght@400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    .form-container-custom {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #d1d1d1;
        width: 80%;
        height: 60%;
        border-radius: 10px;
        gap: 20px;
    }

    .form-custom-input {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 90%;
        height: auto;
        gap: 10px;
    }

    .form-input-container {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        width: 100%;
        gap: 10px;
    }

    .form-label {
        font-weight: 700;
        display: inline-block;
        margin: 0;
    }

    .form-input {
        font-weight: 500;
        flex: 0.9;
        padding: 5px 10px;
        border: 1px solid #9f9e9e;
        border-radius: 15px;
    }

    .container-custom-buttons {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px; 
    }

    .form-custom-buttons {
        padding: 3px 12px;
        border-radius: 20px;
        border: none;
        font-weight: 700;
        font-size: 15px;
        transition: 0.5s;
        color: black;
        text-decoration: none;
    }

    .form-custom-buttons:nth-child(1){
        background-color: #51bf5e;
    }

    .form-custom-buttons:nth-child(1):hover{
        background-color: #00b115;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
    }

    .form-custom-buttons:nth-child(2){
        background-color: #cf4e3b;
    }

    .form-custom-buttons:nth-child(2):hover{
        background-color: #c4250c;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
    }
    .double-items {
        display: flex;
        flex-direction: row;
        width: 100%;
    }
    .form-input-double {
        display: flex;
        flex-direction: row;
        width: 47%;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }
</style>