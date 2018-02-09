    <h1 class="title">
        <?php echo $user->id != null ? $user->email : 'New register'; ?>
    </h1>
    <ul class="breadcrumb">
        <li><a href="?c=User">User</a></li>
        <li><?php echo $user->id != null ? $user->email : 'New register'; ?></li>
    </ul>
    <div class="bd-snippet">
        <div v-if="errors.length" class="container">
            <div class="notification is-danger">
                Please correct the following <strong>error(s):</strong>
                <ul>
                    <li v-for="error in errors">{{ error }}</li>
                </ul>
            </div>
        </div>
        <div class="bd-snippet-preview">
            <form action="?c=User&a=Store" method="post" novalidate="true">
                <input type="hidden" name="id" value="<?php echo $user->id; ?>" />
                <div class="field">
                    <label class="label">Email: </label>
                    <div class="control">
                        <input class="input" id="email" value="<?php echo $user->email; ?>" name="email" type="email" placeholder="email">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Password: </label>
                    <div class="control">
                        <input class="input" id="password" value="<?php echo $user->passwords; ?>" name="password" type="password" placeholder="*****">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Phone number: </label>
                    <div class="control">
                        <input class="input" id="phone" value="<?php echo $user->phone; ?>" name="phone" type="text" placeholder="phone numer">
                    </div> 
                </div>
                <div class="field">
                    <label class="label">Company</label>
                    <div class="control">
                        <input class="input" id="company" value="<?php echo $user->company; ?>" name="company" type="text" placeholder="company">
                    </div> 
                </div>
                <div class="field">
                    <label class="label">Birthdate: </label>
                    <div class="control">
                            <input type="text" id="datepicker" value="<?php echo $user->birthdate ?>"  name="birthdate" class="input" size="10" maxlength="10" placeholder="JJ.MM.AAAA" />
                    </div> 
                </div>
                <div class="field">
                    <button type="submit" class="button is-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>