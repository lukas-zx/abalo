
export default {

    props:['navelements'],
        template:`<nav>
        <ul>
            <li v-for="(item) in navelements">{{item[0]}}
                <ul v-if="item[1] !== null">
                    <li v-for="child in item[1]">{{child}}</li>
                </ul>
            </li>
        </ul>
    </nav>`,




}
