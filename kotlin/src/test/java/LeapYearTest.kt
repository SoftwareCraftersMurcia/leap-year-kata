import org.junit.jupiter.api.Test
import kotlin.test.assertTrue

class LeapYearTest {

    @Test
    fun `should return true when year is 4`() {
        val validator = LeapYearValidator()

        val isLeapYear: Boolean = validator.isLeapYear(4)

        assertTrue { isLeapYear }
    }
}
