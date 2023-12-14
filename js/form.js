const Form = {
    init: function () {
        document.querySelectorAll('form:not([data-ajax="off"])').forEach(form => {
            this.handleFormSubmit(form);
            this.handleClearMessageStatus(form);
        });
    },
    handleFormSubmit(form) {
        form.addEventListener('submit', e => {
            e.preventDefault();

            this.toggleSubmit(form, false);
            this.clearErrors(form);
            this.showMessage(form, true, '');

            const formData = new FormData(form);

            const config = {
                headers: {
                    'Content-Type': 'multipart/form-data',
                }
            };

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json, text/plain, */*',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(formData)
            }).then(res => res.json())
                .then(data => {
                    this.showMessage(form, data.success, data.message);

                    if (data.success) {
                        form.reset();
                    }

                    form.dispatchEvent(new CustomEvent('form_success'));
                })
                .catch(error => {
                    const response = error.response.data;
                    if (response) {
                        this.showMessage(form, response.success, response.message);
                        this.showErrors(form, response.errors);
                    }
                })
                .finally(() => {
                    this.toggleSubmit(form, true);
                });


        });
    },
    handleClearMessageStatus(form) {
        const clearMessageStatusTriggerClassName = form.dataset.clearMessageStatus;
        if (!clearMessageStatusTriggerClassName) {
            return false;
        }

        const clearMessageStatusTrigger = form.querySelector(`.${clearMessageStatusTriggerClassName}`);
        if (!clearMessageStatusTrigger) {
            return false;
        }

        clearMessageStatusTrigger.addEventListener('click', () => this.clearMessage(form));
    },
    clearMessage(form) {
        const resultContainerElement = this.getResultContainerElement(form);
        if (resultContainerElement) {
            resultContainerElement.classList.remove(form.dataset.resultContainerWithMessage);
        }

        const resultElement = this.getResultElement(form);
        if (resultElement) {
            resultElement.classList.remove(form.dataset.success, form.dataset.error);
            resultElement.innerHTML = '';
        }
    },
    showMessage(form, success, message) {
        this.clearMessage(form);

        const resultContainerElement = this.getResultContainerElement(form);
        if (resultContainerElement) {
            resultContainerElement.classList.add(form.dataset.resultContainerWithMessage);
        }

        const resultElement = this.getResultElement(form);
        if (resultElement) {
            resultElement.classList.add(success ? form.dataset.success : form.dataset.error);
            resultElement.innerHTML = message;
        }
    },
    toggleSubmit(form, enabled) {
        form.querySelector('button[type=submit]').disabled = !enabled;
    },
    showErrors(form, errors) {
        if (!errors) {
            return false;
        }

        for (const [field, fieldErrors] of Object.entries(errors)) {
            let fieldName = field;
            let fieldIndex = undefined;

            if (field.includes('.')) {
                [fieldName, fieldIndex] = field.split('.');
                fieldName += '[]';
            }

            const errorContainerName = fieldIndex ? `${fieldName}-${fieldIndex}` : fieldName;

            let errorContainer = form.querySelector(`[data-error-name="${errorContainerName}"]`);
            if (!errorContainer) {
                errorContainer = form.querySelector(`[name="${fieldName}"]`).parentElement;
            }

            const errorElement = document.createElement('small');
            errorElement.classList.add('form-error');
            errorElement.innerHTML = fieldErrors.join('<br>');

            errorContainer.appendChild(errorElement);
        }
    },
    clearErrors(form) {
        const formErrors = form.querySelectorAll('.form-error');
        formErrors && formErrors.forEach(errorElement => {
            errorElement.remove();
        });
    },
    getResultContainerElement(form) {
        const resultContainerElementClassName = form.dataset.resultContainer;
        if (!resultContainerElementClassName) {
            return false;
        }

        const resultContainerElement = form.querySelector(`.${resultContainerElementClassName}`);
        if (!resultContainerElement) {
            return false;
        }

        return resultContainerElement;
    },
    getResultElement(form) {
        const resultElementClassName = form.dataset.result
        if (!resultElementClassName) {
            return false;
        }

        const resultElement = form.querySelector(`.${resultElementClassName}`);
        if (!resultElement) {
            return false;
        }

        return resultElement;
    },
};

export default Form;
