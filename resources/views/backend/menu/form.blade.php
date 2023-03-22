<div class="row">
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $getMenuItems = getMenuItems($menu_id);
            if (isset($menuData->id)) {
                $currentId = $menuData->id;
            } else {
                $currentId = 0;
            }

            if (isset($menuData->parent_id)) {
                $currentParentId = $menuData->parent_id;
            } else {
                $currentParentId = 0;
            }
            ?>
            <label for="parent_id">Parent</label>
            <select class="form-control" name="parent_id">
                <?php
                $isParent = isParent($currentId);
                if ($isParent) {
                    echo "<option value='0'>Aready selected as a parent</option>";
                } else {
                    echo "<option value='0'>Root</option>";
                    if ($getMenuItems) {
                        foreach ($getMenuItems as $item) {
                            if ($item->id != $currentId) {
                                if ($currentParentId == $item->id) {
                                    $selected = "selected";
                                } else {
                                    $selected = "";
                                }
                                echo "<option value='" . $item->id . "' $selected>$item->title</option>";
                            }
                        }
                    }
                }
                ?>
            </select>

        </div>
    </div>
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'title';
            $field_lable = label_case('name');
            $field_placeholder = $field_lable;
            $required = "required";

            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])->value($menuData->title) }}
        </div>
    </div>
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'url';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])->value($menuData->url) }}
        </div>
    </div>
</div>