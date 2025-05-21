<template>
    <div class="login-form-wrapper">
        <div class="login-form-float">
            <form method="post" :action="props.formAction">
                <table>
                    <tbody>
                        <tr class="login-form-email-row">
                            <td class="label">
                                <label for="email">E-Mail: </label>
                            </td>
                            <td>
                                <input type="email" name="email" id="email">
                            </td>
                        </tr>
                        <tr class="login-form-password-row">
                            <td class="label">
                                <label for="password">Passwort: </label>
                            </td>
                            <td>
                                <input type="password" name="password" id="password">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="login-submit-wrapper">
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>

const props = defineProps({
    formAction: {
        required: true,
    }
})

</script>

