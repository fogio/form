<form <?= $view->htmlAttr($form->getAttr())?>>

    <?php foreach ($form as $element) : ?>

        <?php
            if (!$element->hasView()) {
                // type map to view
            }
        ?>

        <?= $this->render('', ['element' => $element, 'form' => $form]) ?>

    <?php endforeach ?>

</form>