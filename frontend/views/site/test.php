<form role="form">
    <div class="col-md-12">
        <h2>sign up</h2>
        <br><br>
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Nome" ng-model="utenteRegistrazione.nome" required>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" name="InputSurname" id="InputSurname" placeholder="Cognome" ng-model="utenteRegistrazione.cognome" required>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <input type="email" class="form-control" id="InputEmailFirst" name="InputEmailFirst" placeholder="Email" ng-model="utenteRegistrazione.email" required>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <input type="email" class="form-control" id="InputEmailSecond" name="InputEmailSecond" placeholder="Conferma Email" ng-model="utenteRegistrazione.email2" required>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <input id="InputPassword" type="password" class="form-control" name="InputPassword" value="" placeholder="Password" ng-model="utenteRegistrazione.password" required>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group date">
                <input type="date" class="input-append date form-control" name="InputBirthday" id="InputBirthday" placeholder="Compleanno" ng-model="utenteRegistrazione.compleanno" required>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <input id="InputDipartimento" type="text" class="form-control" name="InputDipartimento" value="" placeholder="Dipartimento" ng-model="utenteRegistrazione.dipartimento" required>
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
            </div>
        </div>
        <button ng-click="registration()" class="btn btn-warning pull-right"><i class="glyphicon glyphicon-pencil"></i>sign up</button>
    </div>
</form>