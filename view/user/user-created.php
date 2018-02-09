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
            <form action="?c=User&a=Store" method="post" @submit='checkForm' novalidate="true">
                <input type="hidden" name="id" value="<?php echo $user->id; ?>" /> 
                <div class="field">
                    <label class="label">Email: <span v-if="!email" class="required">* Required</span></label>
                    <div class="control">
                        <input class="input" id="email" value="<?php echo $user->email; ?>" name="email" type="email" placeholder="email" v-model="email">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Password: <span v-if="!passwords" class="required">* Required</span></label>
                    <div class="control">
                        <input class="input" id="password" value="<?php echo $user->passwords; ?>" name="password" type="password" placeholder="*****" v-model="passwords">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Phone number: <span v-if="!phone" class="required">* Required</span></label>
                    <div class="control">
                        <input class="input" id="phone" value="<?php echo $user->phone; ?>" name="phone" type="text" placeholder="phone numer" v-model="phone">
                    </div> 
                </div>
                <div class="field">
                    <label class="label">Company</label>
                    <div class="control">
                        <input class="input" id="company" value="<?php echo $user->company; ?>" name="company" type="text" placeholder="company">
                    </div> 
                </div>
                <div class="field">
                    <label class="label">Birthdate: <span v-if="!birthdate" class="required">* Required</span></label>
                    <div class="control">
                            <datepicker v-model="birthdate"><datepicker>
                    </div> 
                </div>
                <div class="field">
                    <button type="submit" class="button is-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>